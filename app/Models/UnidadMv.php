<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMv extends Model
{
    use HasFactory;

    protected $table = 'unidades_mv';

    protected $fillable = [
        'nombre',
        'departamento_id',
    ];
}
