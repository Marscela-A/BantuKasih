<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AkunController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('/donasi')->group(function(){
Route::get('/donasi/{kategori}', [DonasiController::class, 'kategori'])->name('donasi.kategori');
Route::get('/donasi/detail/{id}', [DonasiController::class, 'show'])->name('donasi.show');
});
Route::prefix('/donor')->group(function(){
Route::get('/darah', [DonorController::class, 'da'])->name('donor.darah');
Route::get('/organ', [DonorController::class, 'or'])->name('donor.organ');
});
Route::resource('/akun', AkunController::class);

Route::get('/home', function () {
    return view('menu.home');
});

