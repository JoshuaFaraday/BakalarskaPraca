<div class="container">
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
</div>
