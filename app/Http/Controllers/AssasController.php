<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AssasController extends Controller
{
    protected $asaas;
    public function __construct()
    {
        $this->asaas = Http::withHeaders(['access_token' => env('asaas_key')]);
    }

    public function cadastraCliente(string $id)
    {

    }

    public function listaCliente(string $id)
    {
        return $this->asaas->get(env('ASAAS_URL').'customers/'.$id)->json();
    }

    public function editarCliente(string $id, Request $request)
    {

    }

    public function listaAssinatura(string $id)
    {
        return $this->asaas->get(env('ASAAS_URL').'subscriptions')->json();
    }
    public function criarAssinatura(Request $request)
    {
        return $this->asaas->post(env('ASAAS_URL').'subscriptions')
            ->body($request->all());
    }
}
