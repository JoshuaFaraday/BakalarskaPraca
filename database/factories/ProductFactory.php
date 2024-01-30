<?php

// database/factories/ProductFactory.php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class; // Definujeme, ktorý model bude factory používať.

    public function definition()
    {
        $produkty = ['kopacky', 'lopty', 'chranice', 'oblecenie', 'random', 'nieco'];
        return [
            'name' => Arr::random($produkty), // Vygeneruje názov produktu z troch slov.
            'description' => $this->faker->sentence, // Vygeneruje jednoduchú vetu pre popis.
            'price' => $this->faker->numberBetween(10, 400), // Vygeneruje cenu medzi 10 a 400.

        ];
    }
}

