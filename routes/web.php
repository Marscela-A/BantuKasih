<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\FormController;

Route::get('/home', function(){
    return view('menu.home');
})->name('home');
Route::prefix('/donasi')->group(function(){
    Route::get('/{kategori}', [DonasiController::class, 'kategori'])->name('donasi.kategori');
    Route::get('/detail/{id}', [DonasiController::class, 'show'])->name('donasi.show');
});
Route::get('/form/{id}', [FormController::class, 'showForm'])->name('donasi.form');
Route::resource('/akun', AkunController::class);

Route::get('/aboutus', function (){
    return view('menu.aboutus');
})->name('aboutus');

