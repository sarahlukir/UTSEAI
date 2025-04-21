<?php

use App\Http\Controllers\OrderController;

Route::get('orders/product/{productId}', [OrderController::class, 'getByProduct']);
