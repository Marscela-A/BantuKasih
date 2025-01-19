<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Donasi;
use Midtrans;

class PembayaranController extends Controller
{
    public function checkout(Request $request)
    {
        $form = Form::findOrFail($request->id);
        $snapToken = $form->snap_token;
        $donasi = Donasi::findOrFail($form->donasi_id);

        // Kembalikan view checkout dengan SnapToken
        return view('menu.donasi.checkout', compact('form', 'snapToken', 'donasi'));
    }

    public function success($id)
    {
        $form = Form::findOrFail($id);
        $donasi = Donasi::findOrFail($form->donasi_id);
        $form->status='sukses';
        $form->save();

        return view('menu.donasi.success', compact('form', 'donasi'));
    }

    public function callback(Request $request)
    {
        $notif = new Midtrans\Notification();

        $transaction_status = $notif->transaction_status;
        $order_id = $notif->order_id;
        $fraud_status = $notif->fraud_status;

        $form = Form::findOrFail($order_id);

        if ($transaction_status == 'capture') {
            $form->status = 'sukses';
        } elseif ($transaction_status == 'settlement') {
            $form->status = 'sukses';
        } elseif ($transaction_status == 'pending') {
            $form->status = 'pending';
        } elseif ($transaction_status == 'deny') {
            $form->status = 'gagal';
        } elseif ($transaction_status == 'expire') {
            $form->status = 'gagal';
        } elseif ($transaction_status == 'cancel') {
            $form->status = 'gagal';
        }

        $form->save();

        return $notif->reply();
    }

}