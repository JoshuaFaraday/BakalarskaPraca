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

        $category = Category::find(1); // Najde kategóriu podľa ID
        $letterSizes = Size::where('value', 'regexp', '^[A-Za-z]+$')->get()->pluck('id')->toArray();
        $numberSizes = Size::where('value', 'regexp', '^[0-9]+$')->get()->pluck('id')->toArray();
        $ballSizes = Size::whereIn('value', ['4', '5'])->get()->pluck('id')->toArray();
        $goalKeeperSizes = Size::whereIn('value', ['3', '4', '5', '6', '7', '8', '9', '10', '11', '12'])->get()->pluck('id')->toArray();


        DB::table('categories')->delete();

        $lopty = Category::updateOrCreate(['name' => 'Lopty', 'image' => 'images/lobda.jpg']);
        $lopty->sizes()->attach($ballSizes);
        $kopacky = Category::updateOrCreate(['name' => 'Kopačky', 'image' => 'images/1050116-1109297282.jpg']);
        //$kopacky->sizes()->attach($numberSizes);
        $chranice = Category::updateOrCreate(['name' => 'Chrániče', 'image' => 'images/chraniče.jpg']);
        $chranice->sizes()->attach($letterSizes);
        $brankarskeRukavice = Category::updateOrCreate(['name' => 'Brankárske rukavice', 'image' => 'images/Oddychajace-pogrubione-rekawice-bramkarskie.jpg']);
        $brankarskeRukavice->sizes()->attach($goalKeeperSizes);
        $oblecenie = Category::updateOrCreate(['name' => 'Oblečenie', 'image' => 'images/336420032_max.jpg']);
        $oblecenie->sizes()->attach($letterSizes);
        $doplnky = Category::updateOrCreate(['name' => 'Doplnky', 'image' => 'images/Training-kit-cely-novy-3-scaled.jpg']);


        Category::upsert([
            ['name' => 'Lisovky', 'parent_id' => $kopacky->id ,'image' => 'images/NahladLisovky.jpg'],
            ['name' => 'Lisokolíky', 'parent_id' => $kopacky->id,'image' => 'images/NahladKoliky.jpg'],
            ['name' => 'Turfy', 'parent_id' => $kopacky->id,'image' => 'images/NahladTurf.jpg'],
            ['name' => 'Hálovky', 'parent_id' => $kopacky->id,'image' => 'images/NahladHalovky.jpg'],
        ], ['name'], ['parent_id', 'image']);
        $Kopacky =  Category::updateOrCreate(['name' => 'Lisovky']);
        $Kopacky->sizes()->attach($numberSizes);
        $Kopacky =  Category::updateOrCreate(['name' => 'Lisokoliky']);
        $Kopacky->sizes()->attach($numberSizes);
        $Kopacky =  Category::updateOrCreate(['name' => 'Turfy']);
        $Kopacky->sizes()->attach($numberSizes);
        $Kopacky =  Category::updateOrCreate(['name' => 'Halovky']);
        $Kopacky->sizes()->attach($numberSizes);

        Category::upsert([
            ['name' => 'Tréningové doplnky', 'parent_id' => $doplnky->id , 'image' => 'images/Training-kit-cely-novy-3-scaled.jpg'],
            ['name' => 'Rozhodca', 'parent_id' => $doplnky->id , 'image' => 'images/rozhodcovske-oblecenie-doplnky-potreby-vybavenie-vystroj.jpg'],
            ['name' => 'Zdravotné doplnky', 'parent_id' => $doplnky->id , 'image' => 'images/caroDoplnky.jpg'],
        ], ['name'], ['parent_id', 'image']);


        Category::upsert([
            ['name' => 'Oficiálne dresy', 'parent_id' => $oblecenie->id, 'image' => 'images/RMCF.jpg'],
            ['name' => 'Tričká', 'parent_id' => $oblecenie->id , 'image' => 'images/tshirtsNahlad.jpg'],
            ['name' => 'Trenky', 'parent_id' => $oblecenie->id , 'image' => 'images/trenkyNahlad.jpg'],
            ['name' => 'Tepláky', 'parent_id' => $oblecenie->id , 'image' => 'images/teplakyNahlad.jpg'],
        ], ['name'], ['parent_id', 'image']);
    }
}
