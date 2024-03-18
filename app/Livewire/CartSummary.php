<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartSummary extends Component
{
    public $total = 0;
    public $itemsCount = 0;

    protected $listeners = ['cartUpdated' => 'recalculateTotal'];

    public function mount()
    {
        $this->recalculateTotal();
    }

    public function recalculateTotal()
    {
        // Prihlásenému užívateľovi pridám objednávku
        $order = Order::where('user_id', Auth::id())->latest()->first();

        if($order) {
            // Prepočítanie celkovej sumu z položiek objednávky
            $this->total = $order->variants->sum(function($variant) {
                return $variant->pivot->quantity * $variant->pivot->price_per_item;
            });
            $this->itemsCount = $order->variants->count();
        } else {
            // Ak neexistuje žiadna objednávka,celková suma je 0
            $this->total = 0;
            $this->itemsCount = 0;
        }
    }

    public function render()
    {
        return view('livewire.cart-summary');
    }
}
