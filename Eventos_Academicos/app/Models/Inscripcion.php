<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable=[
        'fecha_inscripcion',
        'espacios_disponibles',
        'evento_id'
    ];

    public function evento():BelongsTo{
        return $this-> belongsTo(Evento::class);
    }

    public function inscripcion_participante():HasMany{
        return $this-> hasMany(Inscripcion_Participante::class);
    }
}
