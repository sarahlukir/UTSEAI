<!-- resources/views/orders/create.blade.php -->
@extends('layouts.app')

@section('title', 'Form Pemesanan Kopi')

@section('content')
    <h2>Form Pemesanan Kopi</h2>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label for="name">Nama Pengguna:</label>
        <input type="text" name="name" id="name" required>

        <label for="table_number">Nomor Meja:</label>
        <input type="text" name="table_number" id="table_number" required>

        <label for="product_id">Produk Kopi:</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
                <option value="{{ $product['id'] }}">
                    {{ $product['name'] }} - Rp {{ number_format($product['price'], 2) }}
                </option>
            @endforeach
        </select>

        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <button type="submit">Pesan</button>
    </form>
@endsection
