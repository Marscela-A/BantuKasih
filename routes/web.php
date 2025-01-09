<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\setlocalecontroller;

Route::get('/', function(){
    return view('menu.home');
})->name('home');
Route::prefix('/donasi')->group(function(){
    Route::get('/{kategori}', [DonasiController::class, 'kategori'])->name('donasi.kategori');
    Route::get('/detail/{id}', [DonasiController::class, 'show'])->name('donasi.show');
});
Route::get('/form/{id}', [FormController::class, 'showForm'])->name('donasi_form'); 
Route::post('/donasi', [FormController::class, 'store'])->name('donasi_form_store');

Route::get('/pembayaran/{id}', [PembayaranController::class, 'checkout'])->name('donasi_payment');
Route::post('/midtrans/callback', [PembayaranController::class, 'callback'])->name('midtrans.callback');
Route::get('/midtrans/sukses', [PembayaranController::class, 'success'])->name('sukses');


Route::resource('/akun', AkunController::class);

Route::get('/aboutus', function (){
    return view('menu.aboutus');
})->name('aboutus');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Auth::routes();
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/profile/create', [App\Http\Controllers\HomeController::class, 'create'])->name('profile_create');
Route::get('/{profile}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('profile_edit');
Route::patch('/{profile}', [App\Http\Controllers\HomeController::class, 'update'])->name('profile_update');
Route::patch('/{profiles}', [App\Http\Controllers\HomeController::class, 'updatedata'])->name('profile_updates');
Route::get('/{profile}', [App\Http\Controllers\HomeController::class, 'show'])->name('profile_show');
Route::post('/profiles', [App\Http\Controllers\HomeController::class, 'store'])->name('profile_store');

//edit->get.head->akun{akun}/edit, index->get.head, store->post, create->get.head->akun/create, show->get.head->akun{akun}
//update->put.patch->akunn{akun}, destroy->delete->akun{akun}
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/set-locale/{locale}', [setlocalecontroller::class, 'setLocale'])->name('set-locale');