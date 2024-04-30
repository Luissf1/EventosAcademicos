<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Inscripcion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $inscripciones = Inscripcion::with('evento')->get();
        return view('inscripciones\index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $eventos = Evento::all();
        return view('inscripciones\create',compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inscripcion::create([
            'fecha_inscripcion' => $request->input('fecha_inscripcion'),
            'espacios_disponibles' => $request->input('espacios_disponibles'),
            'evento_id' => $request->input('evento_id'),
        ]);
        $notification = array(
            'message' => 'Inscripcion agregada',
            'alert-type' => 'info'
        );

        return to_route('inscripcion.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion):View
    {
        $eventos = Evento::all();
        return view('inscripciones\edit', compact('eventos', 'inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        $inscripcion->update([
            'fecha_inscripcion' => $request->input('fecha_inscripcion'),
            'espacios_disponibles' => $request->input('espacios_disponibles'),
            'evento_id' => $request->input('evento_id'),
        ]);
        $notification = array(
            'message' => 'Inscripcion actualizada',
            'alert-type' => 'info'
        );

        return to_route('inscripcion.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        
        $notification = array(
            'message' => 'Inscripcion eliminada',
            'alert-type' => 'info'
        );

        return to_route('inscripcion.index')->with($notification);
    }
}
