<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_autor',
        'apellidopat_autor',
        'apellidomat_autor',
        'afiliacion_id',
    ];

    public function afiliacion(): BelongsTo
    {
        return $this->belongsTo(Afiliacion::class);
    }

    public function asistente():HasMany{
        return $this->hasMany(Asistente::class);
    }

    public function correo_autor():HasMany{
        return $this->hasMany(Correo_Autor::class);
    }

    public function evento_autor():HasMany{
        return $this->hasMany(Evento_Autor::class);
    }
}
