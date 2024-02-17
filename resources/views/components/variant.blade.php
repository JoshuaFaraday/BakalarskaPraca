{{-- <div class="container">
    @foreach ($products as $product)
        <div class="product">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <p>Price: {{ $product->price }}</p>
            @foreach ($product->variants as $variant)
                <div class="variant">
                    <p>Size: {{ $variant->size }}</p>
                    <p>Color: {{ $variant->color }}</p>
                    <p>Info: {{ $variant->info }}</p>
                    <p>Quantity: {{ $variant->quantity }}</p>
                    @if ($variant->image)
                        <img src="{{ asset('images/' . $variant->image) }}" alt="variant image">
                    @endif
                </div>
            @endforeach
        </div>
    @endforeach
</div> --}}
@extends('layouts.app')
{{-- <x-filters :sizes="$sizes" :colors="$colors" :genders="$genders" /> --}}



<div class="category-title">
    <h1>Toto je kategória: {{ $category->name }}</h1>
</div>
@livewire('filter.filter', ['filters' => $filters])
<div class="product-variants">

    @foreach ($variants as $variant)
        <div class="product-variant">
            @if ($variant->image)
                <div class="product-variant__image-wrapper">
                    <img src="{{ asset('images/' . $variant->image) }}" alt="{{ $variant->image }}"
                        class="product-variant__image">
                </div>
                <hr class="product-variant__separator">
            @endif
            <div class="product-variant__info">
                <h3 class="product-variant__title">{{ $variant->product->name }} {{ $variant->product->id }}</h3>
                <p class="product-variant__description">{{ $variant->product->description }}</p>
                <p class="product-variant__price">Price: {{ $variant->product->price }}</p>
                <p class="product-variant__size">Size: {{ $variant->size }}</p>
                <p class="product-variant__color">Color: {{ $variant->color }}</p>
                <p class="product-variant__quantity">Quantity: {{ $variant->quantity }}</p>
                <p class="product-variant__brand">Brand: {{ $variant->product->brand->name }}</p>
            </div>
        </div>
    @endforeach
</div>
