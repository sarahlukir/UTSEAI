<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(Order::all());
    }

    public function show($id)
    {
        return response()->json(Order::findOrFail($id));
    }

    public function store(Request $request)
    {
        // Ambil detail produk dari ProductService
        $product = Http::get("http://localhost:8001/api/products/" . $request->product_id)->json();

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $order = Order::create([
            'customer_name' => $request->customer_name,
            'product_id' => $product['id'],
            'product_name' => $product['name'],
            'price' => $product['price'],
            'quantity' => $request->quantity,
            'total_price' => $product['price'] * $request->quantity,
        ]);
        
        return redirect('/orders')->with('success', 'Pesanan berhasil dibuat!');

    }
    public function viewAll()
    {
        $orders = Order::all();
        return view('orders.show', compact('orders'));
    }

    public function createForm()
    {
        return view('orders.create');
    }

}
