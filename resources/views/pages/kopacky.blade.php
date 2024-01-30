@extends('layouts.app')

@section('content')
<h2>Rád odpisujem vodomery</h2>
{{-- <div class="products-container">
    @foreach ($products as $product)
        <div class="product-large">
            <div class="product-image">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
            </div>
            <div class="product-info">
                <h2 class="product-title">{{ $product->name }}</h2>
                <p class="product-description">{{ $product->description }}</p>
                <span class="price">${{ $product->price }}</span>
                <button class="detail-btn">Detail</button>
            </div>
            <div class="variants-container">
                @foreach ($product->variants as $variant)
                    <div class="variant-info">
                        <p>Veľkosť: {{ $variant->size }}</p>
                        <p>Farba: {{ $variant->color }}</p>
                        <p>Informácie: {{ $variant->info }}</p>
                        <p>Množstvo: {{ $variant->quantity }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div> --}}
@endsection
