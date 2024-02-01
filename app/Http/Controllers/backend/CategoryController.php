<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Volanie pôvodnej index metódy a získanie výstupu
        $view = parent::index($request);

        // Kontrola, či výstup je inštancia View
        if ($view instanceof \Illuminate\View\View) {
            // Získanie dát odovzdaných do pohľadu
            $data = $view->getData();

            // Môžete pridať alebo upraviť dáta pre váš pohľad
            // $data['customVariable'] = 'customValue';

            // Vrátenie vášho vlastného pohľadu s pôvodnými dátami
            return view('voyager::categories.browse', $data);
        }

        // Ak výstup nie je View (napr. presmerovanie), vráťte ho priamo
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        parent::create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        parent::index($request);
    }


    public function show(Request $request, $id)
    {
        parent::create($request, $id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        parent::create($request, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        parent::create($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        parent::create($request, $id);
    }
}
