<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {

        $category = Category::find(1); // Najdite kategóriu podľa ID
        $letterSizes = Size::where('value', 'regexp', '^[A-Za-z]+$')->get()->pluck('id')->toArray();
        $numberSizes = Size::where('value', 'regexp', '^[0-9]+$')->get()->pluck('id')->toArray();


        DB::table('categories')->delete();

        $lopty = Category::updateOrCreate(['name' => 'Lopty', 'image' => '\images\lobda.jpg']);
        $kopacky = Category::updateOrCreate(['name' => 'Kopačky', 'image' => '\images\1050116-1109297282.jpg']);
        $kopacky->sizes()->attach($numberSizes);
        $chranice = Category::updateOrCreate(['name' => 'Chrániče', 'image' => '\images\chraniče.jpg']);
        $brankarskeVybavenie = Category::updateOrCreate(['name' => 'Brankárske Vybavenie', 'image' => '\images\Oddychajace-pogrubione-rekawice-bramkarskie.jpg']);
        $oblecenie = Category::updateOrCreate(['name' => 'Oblečenie', 'image' => '\images\336420032_max.jpg']);
        $oblecenie->sizes()->attach($letterSizes);
        $doplnky = Category::updateOrCreate(['name' => 'Doplnky', 'image' => '\images\Training-kit-cely-novy-3-scaled.jpg']);

        Category::upsert([
            ['name' => 'Lisovky', 'parent_id' => $kopacky->id],
            ['name' => 'Lisokoliky', 'parent_id' => $kopacky->id],
            ['name' => 'Turfy', 'parent_id' => $kopacky->id],
            ['name' => 'Halovky', 'parent_id' => $kopacky->id],
        ], ['name'], ['parent_id']);

        Category::upsert([
            ['name' => 'Treningove doplnky', 'parent_id' => $doplnky->id],
            ['name' => 'Rozhodca', 'parent_id' => $doplnky->id],
            ['name' => 'Zdravotne doplnky', 'parent_id' => $doplnky->id],
        ], ['name'], ['parent_id']);


        Category::upsert([
            ['name' => 'Oficialne dresy', 'parent_id' => $oblecenie->id],
            ['name' => 'Tricka', 'parent_id' => $oblecenie->id],
            ['name' => 'Trenky', 'parent_id' => $oblecenie->id],
            ['name' => 'Ponozky', 'parent_id' => $oblecenie->id],
            ['name' => 'Bundy', 'parent_id' => $oblecenie->id],
            ['name' => 'Mikiny', 'parent_id' => $oblecenie->id],
            ['name' => 'Teplaky', 'parent_id' => $oblecenie->id],
            ['name' => 'Termo', 'parent_id' => $oblecenie->id],
        ], ['name'], ['parent_id']);
    }
}
