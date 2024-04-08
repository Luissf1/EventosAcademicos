<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asistente extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre_asistente',
        'apellidopat_asistente',
        'apellidomat_asistente',
        'autor_id',
    ];

    public function autor():BelongsTo{
        return $this-> belongsTo(Autor::class);
    }
}
