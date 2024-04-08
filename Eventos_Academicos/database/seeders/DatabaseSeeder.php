<?php

namespace Database\Seeders;

use App\Models\Afiliacion;
use App\Models\Autor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Afiliacion::create(['nombre_afiliacion' => 'Investigador Asociado']);
        Afiliacion::create(['nombre_afiliacion' => 'Investigador Invitado']);
        Afiliacion::create(['nombre_afiliacion' => 'Estudiante']);

        Autor::create(['nombre_autor' =>'Ana', 'apellidopat_autor' =>'Garcia', 'apellidomat_autor' =>'Rodriguez', 'afiliacion_id' => 3]);
        Autor::create(['nombre_autor' =>'Javier', 'apellidopat_autor' =>'Lopez', 'apellidomat_autor' =>'Martinez', 'afiliacion_id' => 1]);
        Autor::create(['nombre_autor' =>'Maria', 'apellidopat_autor' =>'Fernandez', 'apellidomat_autor' =>'Perez', 'afiliacion_id' => 2]);

    }
}
