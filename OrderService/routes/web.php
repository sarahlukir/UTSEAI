<?php

use App\Http\Controllers\OrderController;

Route::get('/orders', [OrderController::class, 'viewAll']);
Route::get('/orders/{product_id}', [OrderController::class, 'createForm']);
Route::post('/orders', [OrderController::class, 'store']);
