<?php

use Illuminate\Support\Facades\Route;
use App\HTTP
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('menu.home');
});
Route::get('/tentang-kami', [aboutusController::class, 'index'])->name('tentang-kami')
Route::get
