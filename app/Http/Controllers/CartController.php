<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderVariant;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        //pri pridávaní do košíka sa používateľ musí prihlásiť
        $this->middleware('auth');
    }
    public function show()
    {
        // Získanie aktuálnej objednávky (košíka) pre prihláseného užívateľa
        $order = Order::with('variants')
            ->where('user_id', Auth::id())

            ->first();

        if ($order) {
            // Načítanie položiek košíka a ich detailov
            $cartItems = $order->variants->map(function ($variant) {
                return [
                    'id' => $variant->id,
                    'name' => $variant->product->name,
                    'quantity' => $variant->pivot->quantity,
                    'price' => $variant->pivot->price_per_item,
                    'image' => $variant->image
                ];
            });
        } else {
            // Ak neexistuje objednávka inicializuje sa prázdny zoznam
            $cartItems = collect();
        }

        return view('cart', compact('cartItems', 'order'));
    }

    public function addToCart(Request $request)
    {
        $variant = Variant::findOrFail($request->variant_id);
        $quantity = $request->quantity;
        $price = $variant->product->price;

        $order = Order::firstOrCreate(
            ['user_id' => Auth::id()], // užívateľ musí byť prihlásený
            ['price' => 0] //  cena je 0 na začiatku
        );

        // Získanie existujúcej položky objednávky alebo vytvorenie novej
        $existingOrderVariant = $order->variants()->where('variant_id', $variant->id)->first();

        if ($existingOrderVariant) {
            // Ak existuje, zvýši sa množstvo
            $existingOrderVariant->pivot->quantity += $quantity;
            $existingOrderVariant->pivot->save();
        } else {
            // Ak neexistuje pridá sa nový variant(produkt) s danou cenou a počtom
            $order->variants()->attach($variant->id, ['quantity' => $quantity, 'price_per_item' => $price]);
        }

        // Aktualizovanie celkovej ceny objednávky
        $order->price = $order->variants->sum(function ($ov) {
            return $ov->pivot->quantity * $ov->pivot->price_per_item;
        });
        $order->save();

        return redirect()->route('cart.show');
    }
}
