<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Entidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessaController extends FranquiaController
{
    public function saldo(int $id)
    {
        $resultado = DB::table('entidades')
            ->join('contratos', 'contratos.entidade_id', '=', 'entidades.id')
            ->join('planos', 'planos.id', '=', 'contratos.plano_id')
            ->join('franquia_plano', 'franquia_plano.plano_id', '=', 'planos.id')
            ->join('franquias', 'franquias.id', '=', 'franquia_plano.franquia_id')
            ->get(['franquias.nome','franquia_plano.qtd']);
        return $resultado;
    }

    public function descontaFranquia(int $id, int $franquia_id)
    {

    }

    public function estornaFranquia(int $id, int $franquia_id)
    {

    }
}
