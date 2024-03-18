@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
            <div class="card-header py-3 mt-2">
                <h5 class="mb-0">Váš košík</h5>
            </div>

            @if(isset($order))
                @foreach($cartItems as $item)
                    @livewire('cart-item', ['item' => $item, 'orderId' => $order->id], key($item['id']))
                @endforeach
            @endif

        </div>
        <div class="col-md-4">
            @livewire('cart-summary')
        </div>
    </div>
</div>
{{-- Script pri mazaní produktu z košíka, reloadne/aktualizuje okamžite --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        window.addEventListener('variantDelete', event => {
            window.location.reload();
        });
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            window.addEventListener('maxQuantity', event => {
                alert('Dosiahnutý skladový limit pre daný produkt!');
            });
        });
        </script>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@endsection
