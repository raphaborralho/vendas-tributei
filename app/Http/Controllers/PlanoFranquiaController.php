<?php

namespace App\Http\Controllers;

use App\Models\PlanoFranquia;
use Illuminate\Http\Request;

class PlanoFranquiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PlanoFranquia::query()->simplePaginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return PlanoFranquia::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return PlanoFranquia::findOrFail($id);
        } catch (\Throwable $throwable) {
            return response()->json([
                'mensagem' => 'Não encontrado.',
                'erro' => $throwable->getMessage(),
            ], 404);
        }
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
        try {
            $planoFranquia = PlanoFranquia::findOrFail($id);
            $planoFranquia->deleteOrFail();
            return response()->json([
                'mensagem' => 'Deletado com sucesso.',
            ]);
        } catch (\Throwable $throwable) {
            return response()->json([
                'mensagem' => 'Não foi possível excluir.',
                'erro' => $throwable->getMessage(),
            ], 409);
        }
    }
}
