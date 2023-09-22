<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preferencia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'aceptacion',
        'tematica_id',
        'contacto_id',
    ];

    public function getContacto()
    {
        return $this->belongsTo(Contacto::class,'contacto_id');
    }
}
