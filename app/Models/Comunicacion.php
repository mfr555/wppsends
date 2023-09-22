<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class Comunicacion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'texto',
        'medio',
        'fecha',
        'tematica_1',
        'tematica_2',
        'tematica_3',
    ];

    public function tematicas(): HasMany
    {
        return $this->hasMany(Tematica::class);
    }
}
