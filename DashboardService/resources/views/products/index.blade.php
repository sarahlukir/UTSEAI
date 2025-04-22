@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Menu Fore Coffee</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted">{{ $product->description }}</p>
                    <p class="mt-auto fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="#" class="btn btn-success mt-2">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
