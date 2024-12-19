<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function showForm($donasiId)
    {
        return view('donasi.form', compact('donasiId'));
    }
}
