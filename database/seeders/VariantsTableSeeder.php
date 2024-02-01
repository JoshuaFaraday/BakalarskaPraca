<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Variant;

class VariantsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Vytvorenie inštancie Faker

        $products = Product::all();
        $imageNames = [
            '1050116-1109297282.jpg',
            '336420032_max.jpg',
            'chraniče.jpg',
            'lobda.jpg',
            'logo_shop.png',
            'Oddychajace-pogrubione-rekawice-bramkarskie.jpg'
        ];

        foreach ($products as $product) {
            for ($i = 0; $i < 10; $i++) { // Pre každý produkt vytvoríme 10 variantov
                Variant::create([
                    'product_id' => $product->id,
                    'size' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
                    'color' => $faker->safeColorName(),
                    'info' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'quantity' => $faker->numberBetween(1, 100),
                    'image' => $imageNames[array_rand($imageNames)],
                ]);
            }
        }
    }
}
