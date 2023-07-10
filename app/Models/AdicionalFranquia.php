<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdicionalFranquia extends Model
{
    use HasFactory;

    protected $fillable = [
        'valor',
        'qtd',
        'franquia_id',
        'entidade_id',
    ];
}
