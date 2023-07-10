<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('planos', \App\Http\Controllers\PlanoController::class);
Route::apiResource('plano_franquias', \App\Http\Controllers\PlanoFranquiaController::class);
Route::apiResource('contratos', \App\Http\Controllers\ContratoController::class);
Route::apiResource('entidades', \App\Http\Controllers\EntidadeController::class);
Route::prefix('franquias')->group(function () {
    Route::apiResource('/', \App\Http\Controllers\FranquiaController::class);
    Route::prefix('entidade/{id}')->group( function () {
        Route::get('saldo', [\App\Http\Controllers\ProcessaController::class, 'saldo']);
        Route::post('desconta/{franquia_id}', [\App\Http\Controllers\ProcessaController::class, 'descontaFranquia']);
        Route::post('estorna/{franquia_id}', [\App\Http\Controllers\ProcessaController::class, 'estornaFranquia']);
    });
});
Route::prefix('asaas')->group(function () {
    Route::get('cliente/{id}', [\App\Http\Controllers\AssasController::class, 'listaCliente']);
    Route::get('assinatura/{id}', [\App\Http\Controllers\AssasController::class, 'listaAssinatura']);
    Route::post('assinatura/criar', [\App\Http\Controllers\AssasController::class, 'criarAssinatura']);
});
