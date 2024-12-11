<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AkunController;
Route::get('/', function() {
return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('/donasi')->group(function(){
Route::get('/disabilitas', [DonasiController::class, 'di'])->name('donasi.disabilitas');
Route::get('/bencanaAlam', [DonasiController::class, 'ba'])->name('donasi.bencanaAlam');
Route::get('/pantiAsuhan', [DonasiController::class, 'pa'])->name('donasi.pantiAsuhan');
});
Route::prefix('/donor')->group(function(){
Route::get('/darah', [DonorController::class, 'da'])->name('donor.darah');
Route::get('/organ', [DonorController::class, 'or'])->name('donor.organ');
});
Route::resource('/akun', AkunController::class);

