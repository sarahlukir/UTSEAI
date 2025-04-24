@extends('layouts.app')

@section('content')
<h2 class="mb-4">📋 Daftar Pesanan</h2>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nama Customer</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->product_name }}</td>
            <td>Rp{{ number_format($order->price, 0, ',', '.') }}</td>
            <td>{{ $order->quantity }}</td>
            <td>Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
            <td>{{ $order->created_at->format('d M Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
