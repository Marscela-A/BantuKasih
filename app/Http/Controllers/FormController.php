<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form; 
use App\Models\Donasi;
use Midtrans;

class FormController extends Controller
{
    //
    public function showForm($donasiId)
    {
        return view('menu.donasi.form', compact('donasiId'));
    } 

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required',
            'nominal' => 'required|numeric',
            'donasi_id' => 'required|exists:donasi,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]); 

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('fotosemua', $fileName, 'public');
            $validatedData['foto'] = $fileName;
        }

        $validatedData['donasi_id'] = $request->donasi_id; // Pastikan donasi_id dimasukkan dalam data yang disimpan
        $form = Form::create($validatedData);

        $donasi = Donasi::findOrFail($request->donasi_id); 

        Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Midtrans\Config::$isProduction = (env('APP_ENV') === 'production');

        $params = [
            'transaction_details' => [
                'order_id' => $form->id, 
                'gross_amount' => $form->nominal, 
            ],
            'customer_details' => [
                'first_name' => $form->nama,
                'email' => $form->email,
                'phone' => $form->no_telp,
                'address' => $form->alamat,
            ],
        ];

        try {
            $snapToken = \Midtrans\Snap::createTransaction($params)->token;

            $form->snap_token = $snapToken;
            $form->save();
            $donasi = Donasi::findOrFail($request->donasi_id); 

            return redirect()->route('donasi_payment', ['id' => $form->id]);
        } catch (\Exception $e) {
            // Handle error, misalnya:
            return redirect()->back()->with('error', 'Gagal membuat transaksi Midtrans: ' . $e->getMessage());
        }
        
    } 

}
