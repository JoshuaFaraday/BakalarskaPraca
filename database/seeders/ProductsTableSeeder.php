<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $lopty = Category::where('name', 'Lopty')->first();
        $genderId = Gender::pluck('id');
        $brandId = Brand::pluck('id'); //$brandIds = Brand::pluck('id'); vráti kolekciu Laravel. $brandIds = Brand::pluck('id')->all(); vráti natívne PHP pole. Metóda all() konvertuje kolekciu na jednoduché PHP pole.

        Product::upsert([
            ['name' => 'NEO SWERVE',
            'description' => 'Futsalová lopta Umbro NEO SWERVEmu materiálu si udržiava dlhú .',
            'price' => '9',
            'category_id' => $lopty->id,
            'gender_id' => $genderId->random(),
            'brand_id' => $brandId->random()],

            ['name' => 'NEO asdas',
            'description' => 'hru. Vďaka odolnému materiálu si udržiava dlhú .',
            'price' => '10',
            'category_id' => $lopty->id,
            'gender_id' => $genderId->random(),
            'brand_id' => $brandId->random()],
        ], ['name'], ['description', 'price', 'category_id', 'brand_id', 'gender_id']);



        $kopacky = Category::where('name', 'Kopacky')->first();
        Product::factory()->count(10)->create(['name' => 'kopacky', 'category_id' => $kopacky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $lisovky = Category::where('name', 'Lisovky')->first();
        Product::factory()->count(10)->create(['name' => 'lisovky', 'category_id' => $lisovky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $lisokoliky = Category::where('name', 'Lisokoliky')->first();
        Product::factory()->count(10)->create(['name' => 'lisokoliky', 'category_id' => $lisokoliky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $turfy = Category::where('name', 'Turfy')->first();
        Product::factory()->count(10)->create(['name' => 'turfy', 'category_id' => $turfy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $halovky = Category::where('name', 'Halovky')->first();
        Product::factory()->count(10)->create(['name' => 'halovky', 'category_id' => $halovky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        $lopty = Category::where('name', 'Lopty')->first();
        Product::factory()->count(10)->create(['name' => 'lopty', 'category_id' => $lopty->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $chranice = Category::where('name', 'Chranice')->first();
        Product::factory()->count(10)->create(['name' => 'chranice', 'category_id' => $chranice->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $brankarskeVybavenie = Category::where('name', 'Brankarske vybavenie')->first();
        Product::factory()->count(10)->create(['name' => 'brankarske vybavenie', 'category_id' => $brankarskeVybavenie->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        $doplnky = Category::where('name', 'Doplnky')->first();
        Product::factory()->count(10)->create(['name' => 'doplnky', 'category_id' => $doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $rozhodca = Category::where('name', 'Rozhodca')->first();
        Product::factory()->count(10)->create(['name' => 'rozhodca', 'category_id' => $rozhodca->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $treningove_doplnky = Category::where('name', 'Treningove doplnky')->first();
        Product::factory()->count(10)->create(['name' => 'treningove_doplnky', 'category_id' => $treningove_doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $zdravotne_doplnky = Category::where('name', 'Zdravotne doplnky')->first();
        Product::factory()->count(10)->create(['name' => 'zdravotne doplnky', 'category_id' => $zdravotne_doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        $oblecenie = Category::where('name', 'Oblecenie')->first();
        Product::factory()->count(10)->create(['name' => 'oblecenie', 'category_id' => $oblecenie->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $oficialne_dresy = Category::where('name', 'Oficialne dresy')->first();
        Product::factory()->count(10)->create(['name' => 'oficialne dresy', 'category_id' => $oficialne_dresy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);
        $tricka = Category::where('name', 'Tricka')->first();
        Product::factory()->count(10)->create(['name' => 'tricka', 'category_id' => $tricka->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $trenky = Category::where('name', 'Trenky')->first();
        Product::factory()->count(10)->create(['name' => 'trenky', 'category_id' => $trenky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $ponozky = Category::where('name', 'Ponozky')->first();
        Product::factory()->count(10)->create(['name' => 'ponozky', 'category_id' => $ponozky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $bundy = Category::where('name', 'Bundy')->first();
        Product::factory()->count(10)->create(['name' => 'bundy', 'category_id' => $bundy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $mikiny = Category::where('name', 'Mikiny')->first();
        Product::factory()->count(10)->create(['name' => 'mikiny', 'category_id' => $mikiny->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $teplaky = Category::where('name', 'Teplaky')->first();
        Product::factory()->count(10)->create(['name' => 'teplaky', 'category_id' => $teplaky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        $termo = Category::where('name', 'Termo')->first();
        Product::factory()->count(10)->create(['name' => 'termo', 'category_id' => $termo->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);
    }
}
