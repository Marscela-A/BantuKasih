<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    //
    public function di(){
        return view('menu.donasi.di');
    }
    public function ba(){
        return view('menu.donasi.ba');
    }
    public function pa(){
        return view('menu.donasi.pa');
    }
}
