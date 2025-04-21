<!-- resources/views/orders/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detail Pesanan')

@section('content')
    <h2>Detail Pesanan</h2>

    <p><strong>Nama Pengguna:</strong> {{ $order->name }}</p>
    <p><strong>Nomor Meja:</strong> {{ $order->table_number }}</p>
    <p><strong>Produk Kopi:</strong> {{ $product['name'] }}</p>
    <p><strong>Kuantitas:</strong> {{ $order->quantity }}</p>
    <p><strong>Total Harga:</strong> Rp {{ number_format($order->total_price, 2) }}</p>

    <a href="{{ route('orders.create') }}">Pesan Lagi</a>
@endsection
