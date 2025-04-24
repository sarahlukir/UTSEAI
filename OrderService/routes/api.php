<?php

use App\Models\Order;
use Illuminate\Http\Request;

Route::get('/orders', function () {
    return response()->json(Order::latest()->get());
});

Route::get('/orders/{id}', function ($id) {
    return response()->json(Order::findOrFail($id));
});
