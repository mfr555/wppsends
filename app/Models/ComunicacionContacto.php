<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunicacionContacto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contacto_id',
        'comunicacion_id',
        'usuario_id',
        'recepcion',
        'respuesta_resumida',
        'respuesta_valoracion',
    ];
}
