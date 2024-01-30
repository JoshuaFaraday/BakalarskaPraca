<?php

namespace Database\Factories;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VariantFactory extends Factory
{
    protected $model = Variant::class;

    public function definition()
    {
        // Cesty k obrázkom by mali odrážať štruktúru priečinka, kde sú obrázky skladované
        $imageNames = ['1050116-1109297282.jpg', '336420032_max.jpg', 'chraniče.jpg', 'chraniče.jpg', 'lobda.jpg', 'loho_shop.png', 'Oddychajace-pogrubione-rekawice-bramkarskie.jpg']; // Zoznam názvov obrázkových súborov.
        return [
            'product_id' => \App\Models\Product::factory(), // Predpokladá, že existuje ProductFactory
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']), // Náhodná veľkosť
            'color' => $this->faker->safeColorName, // Náhodná bezpečná farba
            'info' => $this->faker->paragraph, // Náhodný odsek s informáciami
            'quantity' => $this->faker->numberBetween(0, 100), // Náhodné množstvo
            'image' => $this->faker->randomElement($imageNames), // Náhodne vyberie obrázok z vášho zoznamu.


        ];
    }
}
