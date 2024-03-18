@extends('layouts.app')

@section('content')
<div class="container checkout">
    <div class="row">
        <div class="col-md-8">
            <h4 class="mb-3">Dodacie údaje</h4>
            <form action="{{ route('checkout.process') }}" method="POST" class="needs-validation">
                @csrf <!-- CSRF Token -->
                <div class="mb-3">
                    <label for="username">Meno</label>
                    <input type="text" class="form-control" id="username" placeholder="" value="{{ auth()->user()->name }}" required="">
                </div>

                <div class="mb-3">
                    <label for="email">Email </label>
                    {{-- <span class="text-muted">(Povinné)</span> --}}
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ auth()->user()->email }}" required="" readonly>
                </div>

                <div class="mb-3">
                    <label for="address">Adresa</label>
                    <input type="text" class="form-control" id="address" placeholder="Univerzitná 8215" required="">
                    <div class="invalid-feedback">Zadajte prosím vašu dodaciu adresu.</div>
                </div>

                <div class="mb-3">
                    <label for="state">Štát</label>
                    <input type="text" class="form-control" id="state" placeholder="Slovensko" required="">
                </div>

                <div class="mb-3">
                    <label for="city">Mesto</label>
                    <input type="text" class="form-control" id="city" placeholder="Žilina" required="">
                </div>

                <div class="mb-3">
                    <label for="zip">PSČ</label>
                    <input type="text" class="form-control" id="zip" placeholder="01026" required pattern="\d*" title="Please enter a valid zip code.">
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block cart-btn" type="submit">Platba</button>
            </form>
        </div>
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Váš košík</span>

                <span class="badge badge-secondary badge-pill">{{ $cartItems->count() }}</span>

            </h4>
            <ul class="list-group mb-3">
                @foreach($cartItems as $item)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ $item['name'] }}</h6>
                        <small class="text-muted">Počet: {{ $item['quantity'] }}</small>
                    </div>
                    <span class="text-muted">{{ $item['price'] }}€</span>
                </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span>Celková suma (EUR)</span>
                    <strong>{{ $totalPrice }}€</strong>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
