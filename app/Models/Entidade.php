<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpfcnpj',
        'cod_cliente',
    ];

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
}
