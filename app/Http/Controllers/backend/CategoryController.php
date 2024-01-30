<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Získajte všetky kategórie z databázy
        return view('welcome', compact('categories')); // 'your-view-name' je názov vášho Blade súboru bez .blade.php
        //return view('pages.backend.categories.index');
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
    $slug = Str::slug(strtolower($name)); // Konvertuje názov na slug

    $viewName = 'pages.' . $slug; // Vytvára názov pohľadu

    if (view()->exists($viewName)) {
        return view($viewName);
    } else {
        // Presmerovanie na úvodnú stránku ak sa zadala nesprávna cesta
        return redirect('/'); // možnosť aj chybovej hlášky ->with('error', 'Zadali ste nesprávnu cestu.');
    }
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
