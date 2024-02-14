<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Variant $variant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variant $variant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Variant $variant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variant $variant)
    {
        //
    }

    public function filter(Request $request, $name)
    {
        // Získanie filtrovacích možností pre formulár

        $sizes = Variant::distinct()->pluck('size')->all();
        $colors = Variant::distinct()->pluck('color')->all();
        $genders = Gender::all();
        $category = Category::where('name', $name)->first();

        //TODO spravit customRequest https://laravel.com/docs/10.x/validation#form-request-validation
        // Získanie filtrovacích kritérií z požiadavky
        $size = $request->size;
        $color = $request->color;
        $genderId = $request->gender;
        $priceRange = $request->price;
        $searchTerm = $request->search;

        // Základný dotaz na Variant model
        $query = Variant::query();

        // Aplikovanie filtrovania na dotaz podľa veľkosti
        if ($size) {
            $query->where('size', $size);
        }

        // Aplikovanie filtrovania na dotaz podľa farby
        if ($color) {
            $query->where('color', $color);
        }

        // Aplikovanie filtrovania na dotaz podľa pohlavia
        if ($genderId) {
            $query->whereHas('product', function ($query) use ($genderId) {
                $query->where('gender_id', $genderId);
            });
        }

        if ($searchTerm) {
            $query->whereHas('product', function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', '%' . $searchTerm . '%');
            });
        }
        $variants = $query->get();

        $categoryId = 1;

        $variants = Variant::join('products', 'variants.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', 'Lopty')

            ->when(!is_null($color), function ($query) use ($color) {
                return $query->where('variants.color', $color);
            })
            ->when(!is_null($size), function ($query) use ($size) {
                return $query->where('variants.size', $size);})


            ->get(['variants.*']);


        // $productIds = $variants->pluck('product_id')->unique();
        // $products = Product::whereIn('id', $productIds)->with('variants')->get();

        return view('components\variant', [
            'variants' => $variants, // Filtrované varianty produktov
            'sizes' => $sizes,       // Možnosti pre veľkosti
            'colors' => $colors,     // Možnosti pre farby
            'genders' => $genders,   // Možnosti pre pohlavia
            'category' => $category,

        ]);
    }
}
