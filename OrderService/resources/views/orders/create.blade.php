@extends('layouts.app')

@section('content')
<h2 class="mb-4">🛒 Buat Pesanan Baru</h2>

<form method="POST" action="/orders">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
    <input type="hidden" name="product_name" value="{{ $product['name'] }}">
    <input type="hidden" name="price" value="{{ $product['price'] }}">

    <div class="mb-3">
        <label for="customer_name" class="form-label">Nama Customer</label>
        <input type="text" class="form-control" name="customer_name" required>
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Jumlah</label>
        <input type="number" class="form-control" name="quantity" required>
    </div>

    <button type="submit" class="btn btn-success">Pesan Sekarang</button>
</form>
@endsection
