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
        //načíta len hlavné kategórie bez podkategorii
        $categories = Category::whereNull('parent_id')->get();
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

        // Hľadanie kategorie podľa nátvu, názov je vždy jedinečný->Lopty, Kopačky, Doplnky.....
        $category = Category::where('name', $name)->first();

        $subcategories = Category::where('parent_id', $category->id)->get();

        if (!$category) {
            return redirect('/');
        }
        $variants = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->get();


        $sizes = Variant::whereHas('product', function ($query) use ($category) {
            $query->where('category_id', $category->id);
        })->with('size')->get()->pluck('size')->unique('id')->values()->mapWithKeys(function ($size) {
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
        })->get()->mapWithKeys(function ($gender) {
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
                'info' => $model->info

            ];
        })->toArray();



        return view('components.variant', compact('filters', 'category', 'variants', 'subcategories'));
    }


    public function showSpecial(Request $request, $specialCategory)
    {
        $genderId = -1;
        switch ($specialCategory) {
            case 'muz';
                $genderId = 1;
                break;
            case 'zena';
                $genderId = 2;
                break;
            case 'dieta';
                $genderId = 3;
                break;
            default;
                break;
        }


        $variants = Variant::whereHas('product', function ($query) use ($genderId) {
            $query->where('gender_id', $genderId);
        });


        // Získanie unikátnych veľkostí, farieb a pohlaví z variantov produktov v danej kategórii
        $sizes = $variants->with('size')->get()->mapWithKeys(function ($size) {
            return [$size->id => $size->value];
        })->toArray();

        $colors = $variants->whereHas('product', function ($query) use ($genderId) {
            $query->where('gender_id', $genderId);
        })->with('color')->get()->pluck('color')->unique('id')->values()->mapWithKeys(function ($color) {
            return [$color->id => $color->name];
        })->toArray();

        $brands = $variants->whereHas('product', function ($query) use ($genderId) {
            $query->where('gender_id', $genderId);
        })->with('product.brand')->get()->pluck('product.brand')->unique('id')->values()->mapWithKeys(function ($brand) {
            return [$brand->id => $brand->name];
        })->toArray();

        $genders = $variants->whereHas('product', function ($query) use ($genderId) {
            $query->where('gender_id', $genderId);
        })->get()->mapWithKeys(function ($gender) {
            return [$gender->id => $gender->name];
        })->toArray();

        $filters = ['size' => $sizes, 'color' => $colors, 'brand' => $brands, 'gender' => $genders];


        if ($specialCategory == 'all') {
            $variants = Variant::query();

            $sizes = $variants->with('size')->get()->pluck('size')->unique('id')->values()->mapWithKeys(function ($size) {
                return [$size->id => $size->value];
            })->toArray();

            $colors = $variants->with('color')->get()->pluck('color')->unique('id')->values()->mapWithKeys(function ($color) {
                return [$color->id => $color->name];
            })->toArray();

            $brands = $variants->with('product.brand')->get()->pluck('product.brand')->unique('id')->values()->mapWithKeys(function ($brand) {
                return [$brand->id => $brand->name];
            })->toArray();


            $genders = $variants->get()->mapWithKeys(function ($gender) {
                return [$gender->id => $gender->name];
            })->toArray();
            $filters = ['size' => $sizes, 'color' => $colors, 'brand' => $brands, 'gender' => $genders];

        }
        $variants = $variants->limit(10000)->get()->map(function ($model) {

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
                'info' => $model->info

            ];
        })->toArray();


        // return view('components.variant', compact('filters', 'variants'));
        return view('components.variant', [
            'filters' => $filters,
            'variants' => $variants,
            'subcategories' => collect()
        ]);
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
