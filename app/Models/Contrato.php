<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'recorrencia',
        'qtd_acrescimo',
        'qtd_desconto',
        'implantacao',
        'entidade_id',
        'plano_id',
    ];

    public function entidade()
    {
        return $this->belongsTo(Entidade::class);
    }

    public function planos()
    {
        return $this->hasMany(Plano::class);
    }

}
