<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{

    public function kategori($kategori)
    {
        $donasi = Donasi::where('kategori', $kategori)->get();
        return view('menu.donasi.kategori', compact('donasi', 'kategori'));
    }

    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('menu.donasi.detail', compact('donasi'));
    }
}
