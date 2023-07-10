<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Plano::with('plano_franquia')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Plano::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Plano::query()->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
