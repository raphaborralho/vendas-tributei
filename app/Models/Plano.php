<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'tipo',
        'status',
    ];

    public function plano_franquia()
    {
        return $this->belongsToMany(Franquia::class)->withPivot('qtd');
    }
    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }
}
