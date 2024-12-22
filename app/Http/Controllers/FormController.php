<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form; 

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
            'metode_pembayaran' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]); 

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('fotosemua', $fileName, 'public');
            $validatedData['foto'] = $fileName;
        }

        Form::create($validatedData);
        
        return redirect()->route('donasi.pembayaran');
    } 

    public function payment()
    {
        return view('menu.donasi.pembayaran');
    }

}
