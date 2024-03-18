
 <div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $this->item['image'])) }}" class="w-100" alt="{{ $this->item['name'] }}" />
                </div>
                <!-- Image -->
            </div>
            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{ $this->item['name'] }}</strong></p>
                <p>Cena za jeden kus: {{ $this->item['price'] }}€</p>
                <!-- Data -->
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn btn-primary px-3 me-2 cart-btn" wire:click="decrement">
                        <i class="fas fa-minus"></i>
                    </button>
                    <input type="text" class="form-control" wire:model="quantity" readonly />
                    <button class="btn btn-primary px-3 ms-2 cart-btn" wire:click="increment">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <button class="btn btn-danger px-3 ms-3" wire:click="remove">
                    <i class="fas fa-trash"></i>
                </button>
                <!-- Quantity -->
                <!-- Price -->
                <p class="text-start text-md-center">
                    <p class="text-start text-md-center">
                        <strong>{{ $totalPrice }}€</strong>
                    </p>
                </p>
                <!-- Price -->
            </div>
        </div>
    </div>
</div>
