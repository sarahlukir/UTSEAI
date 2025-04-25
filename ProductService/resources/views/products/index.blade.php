@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center fw-bold mb-5">AMERICANO SERIES</h2>
    <a class="btn btn-success mt-3 href" href="http://localhost:8000/">Dashboard</a>
    <a class="btn btn-success mt-3 href" href="/riwayat">Lihat Riwayat Pesanan</a>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $product->name }}</h5>
                    <p class="text-danger fw-semibold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-muted small">{{ \Illuminate\Support\Str::limit($product->description, 50) }}</p>
                </div>
            </div>
        </div>

        <!-- Modal untuk setiap produk -->
        <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-body d-flex flex-column flex-md-row align-items-center gap-4 p-4">
                        <div class="col-md-6">
                            <img src="{{ $product->image }}" class="img-fluid rounded" alt="{{ $product->name }}">
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-bold">{{ $product->name }}</h3>
                            <h4 class="text-danger">Rp{{ number_format($product->price, 0, ',', '.') }}</h4>
                            <p class="text-muted">{{ $product->description }}</p>
                            <a class="btn btn-success mt-3" href="http://localhost:8002/orders/{{ $product['id'] }}" >Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
