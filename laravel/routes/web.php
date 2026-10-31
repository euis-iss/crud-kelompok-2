<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Produk;
use App\Http\Controllers\ProdukController;

Route::resource('produk',
ProdukController::class);

Route::get('/', function () {
    return view('welcome');
});
