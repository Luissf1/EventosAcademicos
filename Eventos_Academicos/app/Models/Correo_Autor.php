<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Correo_Autor extends Model
{
    use HasFactory;
    protected $fillable = [
        'autor_id',
        'correo_autor'
    ];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
}
