<?php

namespace Database\Seeders;

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



        $lopty = Category::where('name','Lopty')->first();
        $genderId = Gender::pluck('id');

        Product::upsert([
            ['name' => 'NEO SWERVE', 'description' => 'Futsalová lopta Umbro NEO SWERVEmu materiálu si udržiava dlhú .', 'price' => '9', 'category_id' => $lopty->id,  'gender_id' => $genderId->random()],
            ['name' => 'NEO asdas', 'description' => 'hru. Vďaka odolnému materiálu si udržiava dlhú .', 'price' => '10', 'category_id' => $lopty->id,  'gender_id' => $genderId->random()],
        ], ['name'], ['description', 'price', 'category_id']);



        $kopacky = Category::where('name','Kopacky')->first();
        Product::factory()->count(10)->create(['name'=>'kopacky','category_id'=>$kopacky->id, 'gender_id' => $genderId->random()]);

        $lisovky = Category::where('name','Lisovky')->first();
        Product::factory()->count(10)->create(['name'=>'lisovky','category_id'=>$lisovky->id, 'gender_id' => $genderId->random()]);

        $lisokoliky = Category::where('name','Lisokoliky')->first();
        Product::factory()->count(10)->create(['name'=>'lisokoliky','category_id'=>$lisokoliky->id, 'gender_id' => $genderId->random()]);

        $turfy = Category::where('name','Turfy')->first();
        Product::factory()->count(10)->create(['name'=>'turfy','category_id'=>$turfy->id, 'gender_id' => $genderId->random()]);

        $halovky = Category::where('name','Halovky')->first();
        Product::factory()->count(10)->create(['name'=>'halovky','category_id'=>$halovky->id, 'gender_id' => $genderId->random()]);


        $lopty = Category::where('name','Lopty')->first();
        Product::factory()->count(10)->create(['name'=>'lopty','category_id'=>$lopty->id, 'gender_id' => $genderId->random()]);

        $chranice = Category::where('name','Chranice')->first();
        Product::factory()->count(10)->create(['name'=>'chranice','category_id'=>$chranice->id, 'gender_id' => $genderId->random()]);

        $brankarskeVybavenie = Category::where('name','Brankarske vybavenie')->first();
        Product::factory()->count(10)->create(['name'=>'brankarske vybavenie','category_id'=>$brankarskeVybavenie->id, 'gender_id' => $genderId->random()]);


        $doplnky = Category::where('name','Doplnky')->first();
        Product::factory()->count(10)->create(['name'=>'doplnky','category_id'=>$doplnky->id, 'gender_id' => $genderId->random()]);

        $rozhodca = Category::where('name','Rozhodca')->first();
        Product::factory()->count(10)->create(['name'=>'rozhodca','category_id'=>$rozhodca->id, 'gender_id' => $genderId->random()]);

        $treningove_doplnky = Category::where('name','Treningove doplnky')->first();
        Product::factory()->count(10)->create(['name'=>'treningove_doplnky','category_id'=>$treningove_doplnky->id, 'gender_id' => $genderId->random()]);

        $zdravotne_doplnky = Category::where('name','Zdravotne doplnky')->first();
        Product::factory()->count(10)->create(['name'=>'zdravotne doplnky','category_id'=>$zdravotne_doplnky->id, 'gender_id' => $genderId->random()]);


        $oblecenie = Category::where('name','Oblecenie')->first();
        Product::factory()->count(10)->create(['name'=>'oblecenie','category_id'=>$oblecenie->id, 'gender_id' => $genderId->random()]);

        $oficialne_dresy = Category::where('name','Oficialne dresy')->first();
        Product::factory()->count(10)->create(['name'=>'oficialne dresy','category_id'=>$oficialne_dresy->id, 'gender_id' => $genderId->random()]);
        $tricka = Category::where('name','Tricka')->first();
        Product::factory()->count(10)->create(['name'=>'tricka','category_id'=>$tricka->id, 'gender_id' => $genderId->random()]);

        $trenky = Category::where('name','Trenky')->first();
        Product::factory()->count(10)->create(['name'=>'trenky','category_id'=>$trenky->id, 'gender_id' => $genderId->random()]);

        $ponozky = Category::where('name','Ponozky')->first();
        Product::factory()->count(10)->create(['name'=>'ponozky','category_id'=>$ponozky->id, 'gender_id' => $genderId->random()]);

        $bundy = Category::where('name','Bundy')->first();
        Product::factory()->count(10)->create(['name'=>'bundy','category_id'=>$bundy->id, 'gender_id' => $genderId->random()]);

        $mikiny = Category::where('name','Mikiny')->first();
        Product::factory()->count(10)->create(['name'=>'mikiny','category_id'=>$mikiny->id, 'gender_id' => $genderId->random()]);

        $teplaky = Category::where('name','Teplaky')->first();
        Product::factory()->count(10)->create(['name'=>'teplaky','category_id'=>$teplaky->id, 'gender_id' => $genderId->random()]);

        $termo = Category::where('name','Termo')->first();
        Product::factory()->count(10)->create(['name'=>'termo','category_id'=>$termo->id, 'gender_id' => $genderId->random()]);

    }
}
