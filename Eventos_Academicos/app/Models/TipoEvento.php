<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoEvento extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre_tipoevento'
    ];

    public function evento():HasMany{
        return $this-> hasMany(Evento::class);
    }

    

}
