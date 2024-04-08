<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Afiliacion extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre_afiliacion'
    ];

    public function autor():HasMany{
        return $this-> hasMany(Autor::class);
    }
}
