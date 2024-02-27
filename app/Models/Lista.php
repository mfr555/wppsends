<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lista extends Model
{
    use HasFactory;

    protected $fillable = [
        'lema',
        'sublema',
        'agrupacion',
        'numero',
        'estado_del_numero',
        'notas',

        'departamento_id',
    ];

    public function departamento(): BelongsTo {
        return $this->belongsTo(Departamento::class);
    }

    public function departamental(): bool {
        return $this->departamento_id != null;
    }
}
