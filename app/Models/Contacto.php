<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
     * Get the origen associated with the Contacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function origen(): HasOne
    {
        return $this->hasOne(Origen::class);
    }

    /**
     * Get the departamento associated with the Contacto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento(): HasOne
    {
        return $this->departamento(Departamento::class);
    }



}
