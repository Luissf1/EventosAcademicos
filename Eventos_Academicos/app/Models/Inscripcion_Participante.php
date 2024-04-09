<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscripcion_Participante extends Model
{
    use HasFactory;
    protected $fillable = [
        'inscripcion_id',
        'participante_id'
    ];

    public function inscripcion():BelongsTo{
        return $this->belongsTo(Inscripcion::class);
    }

    public function participantes():BelongsTo{
        return $this->belongsTo(Participantes::class);
    }
}
