<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;

class PembayaranController extends Controller
{
    //
    public function process(Request $request)
    {
        $data = $request->all();

        $transaction = Pembayaran::create([
            'user_id' => Auth::user()->id,
            'product_id' => $data['product_id'],
            'price' => $data['price'],
            'status' => 'pending',
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true; 

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['price'],
            ), 
            'customer_details' => array(
                'nama' => Auth::user()->nama,
                'email' => Auth::user()->email,
            )
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaction->snap_token = snapToken; 
        $transaction->save(); 

        return redirect()->route('donasi_form_store', $transaction->id);
    }

    public function pembayaran(Transaction $transaction)
    {
        $products = config('products');
        $product = collect($products)->firstWhere('id', $transaction->product_id);

        return view('menu.donasi.pembayaran',  compact('transaction', 'product'));
    }
}
