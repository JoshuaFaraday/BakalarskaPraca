<?php


namespace App\Livewire;

use App\Models\Variant;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CartItem extends Component
{
    public $item;
    public $orderId;
    public $quantity;
    public $totalPrice;

    public function mount($item, $orderId)
    {
        $this->item = $item;
        $this->orderId = $orderId;
        $this->quantity = $item['quantity'];
        $this->totalPrice = $item['price'] * $this->quantity;
    }

    public function increment()
    {
        $variant = Variant::find($this->item['id']);
        $maxQuantity = $variant->quantity;
        if ($this->quantity < $maxQuantity) {
            $this->quantity++;
            $this->totalPrice = $this->quantity * $this->item['price'];
            DB::table('orders_variants')
                ->where('order_id', $this->orderId)
                ->where('variant_id', $this->item['id'])
                ->update(['quantity' => $this->quantity]);


            $this->dispatch('cartUpdated');
        } else {
            $this->dispatch('maxQuantity');
        }
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->totalPrice = $this->quantity * $this->item['price'];
            DB::table('orders_variants')
                ->where('order_id', $this->orderId)
                ->where('variant_id', $this->item['id'])
                ->where('quantity', '>', 1)
                ->decrement('quantity');

            $this->dispatch('cartUpdated');
        }
    }

    public function remove()
    {
        DB::table('orders_variants')
            ->where('order_id', $this->orderId)
            ->where('variant_id', $this->item['id'])
            ->delete();


        $this->dispatch('variantDelete');
    }

    public function render()
    {
        return view('livewire.cart-item');
    }
}
