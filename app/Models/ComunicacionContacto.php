<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * Get the Contacto associated with the ComunicacionContacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto(): HasOne
    {
        return $this->hasOne(Contacto::class, 'id', 'contacto_id');
    }

    /**
     * Get the comunicacion associated with the ComunicacionContacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comunicacion(): HasOne
    {
        return $this->hasOne(Comunicacion::class, 'id', 'comunicacion_id');
    }


}
