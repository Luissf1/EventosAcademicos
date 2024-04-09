<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participantes extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_participante',
        'apellidopat_participante',
        'apellidomat_participante'
    ];

    public function correo_participantes():HasMany{
        return $this-> hasMany(Correo_Participantes::class);
    }

    public function inscripcion_participante():HasMany{
        return $this-> hasMany(Inscripcion_Participante::class);
    }
}
