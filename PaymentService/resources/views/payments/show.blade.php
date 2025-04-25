@extends('layouts.app')

@section('content')
<h2 class="mb-4">💳 Pembayaran untuk Pesanan #{{ $order['id'] }}</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $order['product_name'] }}</h5>
        <p>Jumlah: {{ $order['quantity'] }}</p>
        <p>Total: <strong>Rp{{ number_format($order['total_price'], 0, ',', '.') }}</strong></p>

        <form method="POST" action="/payment/{{ $order['id'] }}/confirm">
            @csrf
            <button class="btn btn-success">Bayar Sekarang</button>
        </form>
    </div>
</div>
@endsection
