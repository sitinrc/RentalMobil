<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('mobil', MobilController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('user', userController::class);    

// Route::get('logout', userController::class, "logout");