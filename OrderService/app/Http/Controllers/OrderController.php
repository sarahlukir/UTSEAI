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
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json($order);
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
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'total_price' => $request->price * $request->quantity,

        ]);

        return redirect("http://localhost:8003/payment/{$order->id}");

    }
    public function viewAll()
    {
        $orders = Order::all();
        return view('orders.show', compact('orders'));
    }

    public function createForm($product_id)
    {
        $product = Http::get("http://localhost:8001/api/products/{$product_id}");
        return view('orders.create', compact('product'));
    }

}
