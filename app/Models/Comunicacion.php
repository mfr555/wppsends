<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;
use App\Models\Tematica;

class Comunicacion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'texto',
        'medio',
        'fecha',
        'tematica1_id',
        'tematica2_id',
        'tematica3_id',
        'activa',
    ];

    public function tematicas(): HasMany
    {
        return $this->hasMany(Tematica::class);
    }

    public function tematica1()
    {
        return $this->belongsTo(Tematica::class, 'tematica1_id');
    }

    public function tematica2()
    {
        return $this->belongsTo(Tematica::class, 'tematica2_id');
    }

    public function tematica3()
    {
        return $this->belongsTo(Tematica::class, 'tematica3_id');
    }
}
