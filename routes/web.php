<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AkunController;

Route::get('/home', function(){
    return view('menu.home');
})->name('home');
Route::prefix('/donasi')->group(function(){
    Route::get('/{kategori}', [DonasiController::class, 'kategori'])->name('donasi.kategori');
    Route::get('/detail/{id}', [DonasiController::class, 'show'])->name('donasi.show');
});
Route::prefix('/donor')->group(function(){
    Route::get('/{kategori}', [DonorController::class, 'kategori'])->name('donor.kategori');
    Route::get('/detail/{id}', [DonorController::class, 'show'])->name('donor.show');
});
Route::resource('/akun', AkunController::class);

Route::get('/aboutus', function (){
    return view('menu.aboutus');
})->name('aboutus');

