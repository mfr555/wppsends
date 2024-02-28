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
        'unidad_mv_id',
    ];

    public function getPreferencias(): HasMany
    {
        return $this->hasMany(Preferencia::class, 'preferencia_id');
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

    /**
     * Devuelve la compatibilidad del contacto con un conjunto de hasta 3 temáticas
     * considerando sus preferencias temáticas
     *
     * @return boolean
     */
    public function compatible($tematica1_id, $tematica2_id, $tematica3_id){
        $comp = false;
        if (!$comp){
            $pref1 = Preferencia::where(['contacto_id' => $this->id,
                                        'tematica_id' => $tematica1_id ])->first();
            if (isset($pref1)){
                $comp = ($pref1->aceptacion > 0);
            }
        }

        if (!$comp && isset($tematica2_id)){
            $pref2 = Preferencia::where(['contacto_id' => $this->id,
                                        'tematica_id' => $tematica2_id ])->first();
            if (isset($pref2)){
                $comp = ($pref2->aceptacion > 0);
            }
        }

        if (!$comp && isset($tematica3_id)){
            $pref3 = Preferencia::where(['contacto_id' => $this->id,
                                        'tematica_id' => $tematica3_id ])->first();
            if (isset($pref3)){
                $comp = ($pref3->aceptacion > 0);
            }
        }
        return $comp;
    }

}
