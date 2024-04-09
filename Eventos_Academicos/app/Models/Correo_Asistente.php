<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Correo_Asistente extends Model
{
    use HasFactory;

    protected $fillable = [
        'asistente_id',
        'correo_asistente',
    ];

    public function asistente():BelongsTo{
        return $this-> belongsTo(Asistente::class);
    }
}
