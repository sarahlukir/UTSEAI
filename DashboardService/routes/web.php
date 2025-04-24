<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasihKopiController;
use App\Http\Controllers\ProductController;

Route::get('/', [KasihKopiController::class, 'index']);

