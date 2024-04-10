<?php

use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\ProfileController;
use App\Models\Evento;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/evento', EventosController::class);
    Route::resource('/autor', AutorController::class);
    Route::resource('/asistente', AsistenteController::class);
    Route::resource('/inscripcion', InscripcionController::class);
    Route::resource('/participante', ParticipanteController::class);

    Route::get('eventos/{evento}', function (Evento $evento) {
        return response()->json($evento->tipoevento);
    });
});

require __DIR__ . '/auth.php';
