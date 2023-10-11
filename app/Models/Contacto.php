<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ComunicacionContacto;
use App\Models\Departamento;
use App\Models\Origen;

class Contacto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tratamiento',
        'nombre',
        'apellido',
        'sexo',
        'email',
        'cel',
        'lista_negra',
        'comentarios',
        'departamento_id',
        'origen_id',
    ];

    public function getPreferencias(): HasMany
    {
        return $this->hasMany(Prefencia::class, 'preferencia_id');
    }

    public function contactoComunicaciones(): HasMany
    {
        return $this->hasMany(ComunicacionContacto::class, 'contacto_id');
    }

    /**
     * Get the origen that owns the Contacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function origen(): BelongsTo
    {
        return $this->belongsTo(Origen::class);
    }


    /**
     * Get the departamento that owns the Contacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }

}
