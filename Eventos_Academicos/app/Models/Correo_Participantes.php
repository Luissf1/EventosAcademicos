<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Correo_Participantes extends Model
{
    use HasFactory;

    protected $fillable=[
        'correo_participantes',
        'participante_id',        
    ];

    public function participantes():BelongsTo{
        return $this->belongsTo(Participantes::class);
    }

}
