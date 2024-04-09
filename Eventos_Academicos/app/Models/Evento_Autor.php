<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento_Autor extends Model
{
    use HasFactory;

    protected $fillable=[
        'evento_id',
        'autor_id'
    ];

    public function evento():BelongsTo{
        return $this->belongsTo(Evento::class);
    }

    public function autor():BelongsTo{
        return $this->belongsTo(Autor::class);
    }
}
