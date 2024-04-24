<?php

namespace App\Http\Controllers\backend;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController  extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $view = parent::index($request);
        if ($view instanceof \Illuminate\View\View) {
            $data = $view->getData();
            return view('voyager::variants.browse', $data);
        }

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return parent::create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return  parent::index($request);
    }


    public function show(Request $request, $id)
    {
        return parent::create($request, $id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        return parent::create($request, $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return parent::create($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        return parent::create($request, $id);
    }
}
