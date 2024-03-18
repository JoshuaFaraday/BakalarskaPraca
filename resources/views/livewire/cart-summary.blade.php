<div class="card mb-4">
    <div class="card-header py-3">
        <h5 class="mb-0">Sumarizácia objednávky</h5>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                    <p>Počet produktov: </p>
                <span>{{ $itemsCount }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                    <strong>Celková suma</strong>
                </div>
                <span><strong>{{ $total }}€</strong></span>
            </li>
        </ul>
        <a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg btn-block cart-btn">Objednať</a>
    </div>
</div>
