<div class="product-variants">

    @foreach ($filteredVariants as $variant)
        <div class="product-variant">
            <a href="{{ route('variantDetail', $variant['id']) }}" class="product-variant__link">
                @if ($variant['image'])
                    <div class="product-variant__image-wrapper">
                        <img src="{{ asset('images/' . $variant['image']) }}" alt="{{ $variant['image'] }}"
                            class="product-variant__image">
                    </div>
                    <hr class="product-variant__separator">
                @endif
            </a>
            <div class="product-variant__info">
                <h3 class="product-variant__title">{{ $variant['name'] }} {{ $variant['id'] }}</h3>
                {{-- variant 'id' asi potom odstrániť keď budú normálne itemy --}}
                <p class="product-variant__description">{{ $variant['description'] }}</p>
                <p class="product-variant__price">Price: {{ $variant['price'] }}</p>
                <p class="product-variant__size">Size: {{ $variant['size']['value'] }}</p>
                <p class="product-variant__color">Color: {{$variant['color']['id']}} {{ $variant['color']['name'] }}</p>
                <p class="product-variant__quantity">Quantity: {{ $variant['quantity'] }}</p>
                <p class="product-variant__quantity">Gender: {{ $variant['gender']['name'] }}</p>
                <p class="product-variant__brand">Brand: {{ $variant['brand']['name'] }}</p>
                <a href="{{ route('variantDetail', ['id' => $variant['id']]) }}" class="btn btn-info">Detail</a>
            </div>
        </div>
    @endforeach
    {{-- <div class="pagination">
        {{ $variants->links() }}
    </div> --}}
</div>
