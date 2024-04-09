<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_evento',
        'enlace_evento',
        'fecha_evento',
        'tipo_evento_id'
    ];

    public function tipoevento():BelongsTo{
        return $this->belongsTo(TipoEvento::class);
    }

    public function correo_autor():HasMany{
        return $this-> hasMany(Correo_Autor::class);
    }

    public function evento_autor():HasMany{
        return $this->hasMany(Evento_Autor::class);
    }

    public function inscripcion():HasMany{
        return $this->hasMany(Inscripcion::class);
    }
    
    public function historial_eventos():HasMany{
        return $this->hasMany(Historial_Eventos::class);
    }
}
