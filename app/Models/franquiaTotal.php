<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class franquiaTotal extends Model
{
    use HasFactory;

    protected $fillable = [
        'qtd',
        'franquia_id',
        'contrato_id',
    ];
}
