<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Evento;
use App\Models\TipoEvento;
use Illuminate\Http\RedirectResponse;
//use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\View;
class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $eventos =Evento::with('tipoevento')->get();
        return view('eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $tipoevento = TipoEvento::all();
        return view('eventos.create',compact('tipoevento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$tipoevento = $request->tipo_evento_id;
        //$data = $request -> validated();
        //Evento::create($data);

        Evento::create([
            'nombre_evento' => $request->input('nombre_evento'),
            'enlace_evento' => $request->input('enlace_evento'),
            'fecha_evento' => $request->input('fecha_evento'),
            'tipo_evento_id' => $request->input('tipo_evento_id'),
        ]);

        $notification = array(
            'message' => 'Evento agregado',
            'alert-type' => 'info'
        );

        return to_route('evento.index')->with($notification);
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
    public function edit(Evento $evento):View
    {
        $tipoevento = TipoEvento::all();
        return view('eventos.edit',compact('tipoevento','evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {  
        $evento->update([
            'nombre_evento' => $request->input('nombre_evento'),
            'enlace_evento' => $request->input('enlace_evento'),
            'fecha_evento' => $request->input('fecha_evento'),
            'tipo_evento_id' => $request->input('tipo_evento_id'),
        ]);

        $notification = array(
            'message' => 'Evento actualizado',
            'alert-type' => 'info'
        );

        return to_route('evento.index')->with($notification);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento):RedirectResponse
    {
        $evento->delete();
        return to_route('evento.index');
    }
}
