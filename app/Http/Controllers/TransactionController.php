<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Pembayaran::where('user_id', Auth::user()->id)->get();

        $transactions->transform(function ($transaction) {
            $transaction->donasi = collect(config('donasi'))->firstWhere('id', $transaction->donasi_id);
            return $transaction;
        });
        return view('transaction.index', compact('transactions'));
    }
}
