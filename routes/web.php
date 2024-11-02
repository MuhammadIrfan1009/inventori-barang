<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/barang');

use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);