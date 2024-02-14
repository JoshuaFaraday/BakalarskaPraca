<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Získajte všetky kategórie z databázy
        return view('welcome', compact('categories')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show($name)
    {
        // Hľadanie kategorie podľa nátvu, názov je vždy jedinečný->Lopty, Kopačky, Doplnky.....
        $category = Category::where('name', $name)->first();

        // Ak kategória neexistuje presmerujem sa na hlavnu stranku
        if (!$category) {
            return redirect('/');
            //->with('error', 'Kategória neexistuje.');
        }
        // Načítavam všetky produkty ktore patria danej najdenej kategórie, s `with('variants')` načítam aj všetky varianty produktov
        //Produkty s variantami sa získajú v jednom dotaze
        $variants = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();

        //TODO:nieco podobne budem potrebovat pri ziskavani dat do filtrov
        // Získanie unikátnych veľkostí, farieb a pohlaví z variantov produktov v danej kategórii
        // $sizes = Variant::whereHas('product', function ($query) use ($category) {
        //     $query->where('category_id', $category->id);
        // })->distinct()->pluck('size_id');
        $sizes = Category::with('sizes')->where('id', $category->id)->first()->sizes->mapWithKeys(function ($size) {
            return [$size->id => $size->value];
        })->toArray();


        // $colors = Variant::whereHas('product', function ($query) use ($category) {
        //     $query->where('category_id', $category->id);
        // })->distinct()->pluck('color_id');
        $colors = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->with('color')->get()->pluck('color')->unique('id')->values()->mapWithKeys(function ($color) {
            return [$color->id => $color->name];
        })->toArray();

        $genders = Gender::whereHas('products', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();




        $genders = $genders->map(function ($gender) {
            return $gender->only(['id', 'name']); // predpoklad že chcem len ID a názov pre pohlavia
        })->toArray();
        $filters = ['sizes' => $sizes, 'colors' => $colors];


        return view('components.variant', compact('filters', 'category', 'variants'));



        //Konverzia názvu kategorie na slug, kvoli diakritike a velky ma malym pismenam v db a nazvov blade-ov, teda dynamicky určit nazov šablony ktoru chcem zobrazit
        // napr ak je nazov kategorie Lopty tak vdaka slug to bude lopty
        // $slug = Str::slug(strtolower($name)); // konverzia nazvu na male pismena a potom na slug
        // $viewName = 'pages.' . $slug; // vytovrim nazov sablony pre sablony v pages/

        // // ak sablona existuje, zobrazim ju a pošlem do nej načitane produkty
        // //dd($variants);
        // if (view()->exists($viewName)) {
        //     return view($viewName, compact('variants', 'sizes', 'colors', 'genders'));
        // } else {
        //     // redirect na hlavnu stranku ak view neexistuje
        //     return redirect('/');
        // }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
