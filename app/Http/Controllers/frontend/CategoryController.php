<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
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

    public function show(Request $request, $name)
    {

        $genders = Gender::all();
        // Hľadanie kategorie podľa nátvu, názov je vždy jedinečný->Lopty, Kopačky, Doplnky.....
        $category = Category::where('name', $name)->first();

        if (!$category) {
            return redirect('/');
        }
        $variants = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();

        // Získanie unikátnych veľkostí, farieb a pohlaví z variantov produktov v danej kategórii
        $sizes = Category::with('sizes')->where('id', $category->id)->first()->sizes->mapWithKeys(function ($size) {
            return [$size->id => $size->value];
        })->toArray();

        $colors = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->with('color')->get()->pluck('color')->unique('id')->values()->mapWithKeys(function ($color) {
            return [$color->id => $color->name];
        })->toArray();

        $brands = Brand::whereHas('products', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get()->pluck('name', 'id')->toArray();

        $genders = Gender::whereHas('products', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get()->mapWithKeys(function($gender) {
            return [$gender->id => $gender->name];
        })->toArray();

        $filters = ['size' => $sizes, 'color' => $colors, 'brand' => $brands, 'gender' => $genders];

        $variants = $variants->map(function ($model) {
            return [
                'id' => $model->id,
                'name' => $model->product->name,
                'size' => [
                    'id' => $model->size->id,
                    'value' =>  $model->size->value
                ],
                'color' => [
                    'id' => $model->color->id,
                    'name' => $model->color->name
                ],
                'brand' => [
                    'id' => $model->product->brand->id,
                    'name' => $model->product->brand->name
                ],
                'gender' => [
                    'id' => $model->product->gender->id,
                    'name' => $model->product->gender->name
                ],
                'image' => $model->image,
                'description' => $model->product->description,
                'quantity' => $model->quantity,
                'price' => $model->product->price,

            ];
        })->toArray();



        return view('components.variant', compact('filters', 'category', 'variants'));
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
