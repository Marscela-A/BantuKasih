<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SearchController;

Route::get('/', function(){
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
Route::get('/search', [SearchController::class, 'index'])->name('search');

Auth::routes();
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
