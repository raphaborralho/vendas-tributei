<?php

namespace App\Http\Controllers;

use App\Models\Entidade;
use Illuminate\Http\Request;

class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Entidade::with('contratos')->simplePaginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entidade = Entidade::create($request->all());
        if ($entidade) {

        }
        return $entidade;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
