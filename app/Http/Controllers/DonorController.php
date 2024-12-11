<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    //
    public function da(){
        return view('menu.donor.da');
    }
    public function or(){
        return view('menu.donor.or');
    }
}
