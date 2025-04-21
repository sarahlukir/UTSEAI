<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    // Menampilkan form pemesanan
    public function create()
    {
        // Ambil data produk kopi dari ProductService
        $response = Http::get('http://127.0.0.1:8002/api/products');
        $products = $response->json();

        return view('orders.create', compact('products'));
    }

    // Menyimpan order baru
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'table_number' => 'required|string|max:10',
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        // Mengambil harga produk dari ProductService
        $product = Product::find($request->product_id);
        $total_price = $product->price * $request->quantity;

        $order = Order::create([
            'name'         => $request->name,
            'table_number' => $request->table_number,
            'product_id'   => $request->product_id,
            'quantity'     => $request->quantity,
            'total_price'  => $total_price,
        ]);

        return redirect()->route('orders.show', $order->id);
    }

    // Menampilkan detail order tertentu
    public function show($id)
    {
        $order = Order::findOrFail($id);

        // Mengambil data produk kopi
        $response = Http::get('http://127.0.0.1:8002/api/products');
        $products = $response->json();
        $product = collect($products)->firstWhere('id', $order->product_id);

        return view('orders.show', compact('order', 'product'));
    }

    // Menambahkan API Endpoint agar bisa diakses oleh service lain

    public function getByProduct($productId)
    {
        $orders = Order::where('product_id', $productId)->get();

        return response()->json([
            'status' => 'success',
            'data'   => $orders,
        ]);
    }
}