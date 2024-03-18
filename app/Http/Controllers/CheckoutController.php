<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $order = Order::with('variants')->where('user_id', Auth::id())->first();
        if (!$order || $order->variants->isEmpty()) {
            // Ak nie je žiadna objednávka alebo ak objednávka nemá žiadne varianty (položky košíka)
            return redirect()->route('cart.show')->with('error', 'Objednávku nemožno dokončiť, pretože košík je prázdny.');
        }

        $cartItems = $order ? $order->variants->map(function ($variant) {
            return [
                'id' => $variant->id,
                'name' => $variant->product->name,
                'quantity' => $variant->pivot->quantity,
                'price' => $variant->pivot->price_per_item,
                'image' => $variant->image
            ];
        }) : collect();

        $totalPrice = $cartItems->reduce(function ($carry, $item) {
            return $carry + ($item['quantity'] * $item['price']);
        }, 0);

        // prenášam cartItems a totalPrice do šablóny checkout.blade
        return view('checkout', compact('cartItems', 'totalPrice'));
    }

    public function process(Request $request)
    {
        $order = Order::with('variants')->where('user_id', Auth::id())->firstOrFail();

        foreach ($order->variants as $variant) {
            //- počtu cez priamy prístup na model Variant
            $variant->decrement('quantity', $variant->pivot->quantity);
        }
        $order->variants()->detach();

        return redirect()->route('cart.show')->with('success', 'Objednávka bola úspešne dokončená.');
    }
}
