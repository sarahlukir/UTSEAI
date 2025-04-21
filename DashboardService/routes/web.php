<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasihKopiController;

Route::get('/', [KasihKopiController::class, 'index']);

