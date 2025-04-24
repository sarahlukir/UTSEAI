<?php

use App\Http\Controllers\ProductController;

Route::get('/menu', [ProductController::class, 'index']);
Route::get('/menu/{id}', [ProductController::class, 'show']);
Route::get('/api/products/{id}', [ProductController::class, 'show']);
