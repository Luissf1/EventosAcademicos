<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historial_Eventos extends Model
{
    use HasFactory;

    protected $fillable = [
        'evento_id',
        'nombre_historialevento',
        'Fecha_HistorialEvento'  
    ];

    public function evento():BelongsTo{
        return $this->belongsTo(Evento::class);
    }
}
