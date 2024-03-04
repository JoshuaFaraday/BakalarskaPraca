@extends('layouts.app')

@section('content')
<div class="variant-detail">
    <div class="variant-detail__image-section">
        <img src="{{ asset('images/' . $variant->image) }}" alt="{{ $variant->name }}" class="variant-detail__image">
    </div>
    <div class="variant-detail__info-section">
        <h2 class="variant-detail__title">{{ $variant->product->name }}</h2>
        <p class="variant-detail__description">{{ $variant->product->description }}</p>
        <p class="variant-detail__info">Info: {{ $variant['info'] }}</p>
        <p class="variant-detail__brand">Brand: {{ $variant->product->brand->name }}</p>
        <p class="variant-detail__color">Color: {{ $variant->color->name }}</p>
        <p class="variant-detail__size">Size: {{ $variant->size->value }}</p>
        <p class="variant-detail__gender">Gender: {{ $variant->product->gender->name }}</p>
        <p class="variant-detail__quantity">Quantity: {{ $variant->quantity }}</p>
        <p class="variant-detail__price">Price: {{ $variant->product->price }}€</p>
        <a href="#" class="variant-detail__add-to-cart-btn">PRIDAŤ DO KOŠÍKA</a>
    </div>
</div>
@endsection


