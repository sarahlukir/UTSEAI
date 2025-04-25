<?php

use App\Models\Order;
use Illuminate\Http\Request;

Route::get('/orders', function () {
    return response()->json(Order::latest()->get());
});

Route::get('/riwayat', function () {
    return response()->json(Order::all());
});

Route::get('/orders/{id}', function ($id) {
    return response()->json(Order::findOrFail($id));
});
