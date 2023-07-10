<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoFranquia extends Model
{
    use HasFactory;

    protected $table = 'franquia_plano';
    protected $fillable = [
        'plano_id',
        'franquia_id',
        'qtd',
    ];

    public function plano()
    {
        return $this->belongsTo(Plano::class);
    }

    public function franquia()
    {
        return $this->belongsTo(Franquia::class);
    }

}
