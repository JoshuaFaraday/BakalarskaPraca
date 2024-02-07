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
        $sizes = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->distinct()->pluck('size');

        $colors = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->distinct()->pluck('color');

        // Predpokladajúc, že máte vzťah medzi produktmi a pohlaviami definovaný v modeli Product
        $genders = Gender::whereHas('products', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();


        //Konverzia názvu kategorie na slug, kvoli diakritike a velky ma malym pismenam v db a nazvov blade-ov, teda dynamicky určit nazov šablony ktoru chcem zobrazit
        // napr ak je nazov kategorie Lopty tak vdaka slug to bude lopty
        $slug = Str::slug(strtolower($name)); // konverzia nazvu na male pismena a potom na slug
        $viewName = 'pages.' . $slug; // vytovrim nazov sablony pre sablony v pages/


        // ak sablona existuje, zobrazim ju a pošlem do nej načitane produkty
        //dd($variants);
        if (view()->exists($viewName)) {
            return view($viewName, compact('variants', 'sizes', 'colors', 'genders'));
        } else {
            // redirect na hlavnu stranku ak view neexistuje
            return redirect('/');
        }
    }

    //     public function show(Request $request, $name)
    // {
    //     // Hľadanie kategórie podľa názvu, názov je vždy jedinečný (napr. Lopty, Kopačky, Doplnky)
    //     $category = Category::where('name', $name)->first();

    //     // Ak kategória neexistuje, presmerujeme na hlavnú stránku
    //     if (!$category) {
    //         return redirect('/'); // Možno pridať správu o chybe, ak je to potrebné
    //     }

    //     // Začneme dotaz pre produkty v danej kategórii
    //     $query = Product::where('category_id', $category->id)->with('variants');

    //     // Aplikovanie filtrov, ak boli poskytnuté
    //     if ($request->filled('size')) {
    //         $query->whereHas('variants', function ($query) use ($request) {
    //             $query->where('size', $request->input('size'));
    //         });
    //     }

    //     if ($request->filled('color')) {
    //         $query->whereHas('variants', function ($query) use ($request) {
    //             $query->where('color', $request->input('color'));
    //         });
    //     }

    //     if ($request->filled('gender')) {
    //         $query->where('gender_id', $request->input('gender'));
    //     }

    //     // Tu môžete pridať ďalšie filtre podľa potreby (napr. podľa ceny, značky atď.)

    //     // Vykonanie dotazu a získanie filtrovaných produktov
    //     $products = $query->get();

    //     // Získanie filtrovacích možností pre zobrazenie vo formulári (môžete optimalizovať tieto dotazy podľa potreby)
    //     $sizes = Variant::distinct()->pluck('size')->all();
    //     $colors = Variant::distinct()->pluck('color')->all();
    //     $genders = Gender::all();

    //     // Konverzia názvu kategórie na slug pre dynamické určenie názvu šablóny
    //     $slug = Str::slug(strtolower($name));
    //     $viewName = 'pages.' . $slug;

    //     // Ak šablóna existuje, zobrazíme ju a pošleme do nej načítané produkty a filtre
    //     if (view()->exists($viewName)) {
    //         return view($viewName, compact('products', 'sizes', 'colors', 'genders'));
    //     } else {
    //         // Redirect na hlavnú stránku, ak šablóna neexistuje
    //         return redirect('/');
    //     }
    // }


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
