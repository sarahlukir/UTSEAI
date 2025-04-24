<?php

use App\Http\Controllers\OrderController;

Route::get('/orders', [OrderController::class, 'viewAll']);
Route::get('/orders/create', [OrderController::class, 'createForm']);
Route::post('/orders', [OrderController::class, 'store']);
