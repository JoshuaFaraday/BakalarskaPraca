@extends('layouts.app')

@section('content')
<div class="variant-detail">
    <div class="variant-detail__image-section">
        <img src="{{ asset('storage/' . str_replace('\\', '/', $variant->image)) }}" alt="{{ $variant->name }}" class="variant-detail__image">
    </div>
    <div class="variant-detail__info-section">
        <h2 class="variant-detail__title">{{ $variant->product->name }}</h2>
        <p class="variant-detail__description">{{ $variant->product->description }}</p>
        <p class="variant-detail__info">Info: {{ $variant['info'] }}</p>
        <p class="variant-detail__brand">Značka: {{ $variant->product->brand->name }}</p>
        <p class="variant-detail__color">Farba: {{ $variant->color->name }}</p>
        <p class="variant-detail__size">Veľkosť: {{ $variant->size->value }}</p>
        <p class="variant-detail__gender">Pohlavie: {{ $variant->product->gender->name }}</p>
        <p class="variant-detail__price">Cena: {{ $variant->product->price }}€</p>
        <div class="variant-detail__quantity">Počet:
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="variant_id" value="{{ $variant->id }}">
                <select name="quantity" class="variant-detail__quantity-select">
                    @for ($i = 1; $i <= $variant->quantity; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <button type="submit" class="variant-detail__add-to-cart-btn">PRIDAŤ DO KOŠÍKA</button>
            </form>
        </div>
    </div>
</div>
@endsection


