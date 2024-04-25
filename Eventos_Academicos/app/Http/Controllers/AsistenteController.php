<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use App\Models\Autor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $asistentes = Asistente::with('autor')->get();
        return view('asistentes\index',compact('asistentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $autor = Autor::all();
        return view('asistentes.create', compact('autor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Asistente::create([
            'nombre_asistente' => $request->input('nombre_asistente'),
            'apellidopat_asistente' => $request->input('apellidopat_asistente'),
            'apellidomat_asistente' => $request->input('apellidomat_asistente'),
            'autor_id' => $request->input('autor_id'),
        ]);
        $notification = array(
            'message' => 'Asistente agregado',
            'alert-type' => 'info'
        );

        return to_route('asistente.index')->with($notification);
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
    public function edit(Asistente $asistente):View
    {
        $autor = Autor::all();
        return view('asistentes.edit', compact('autor', 'asistente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistente $asistente)
    {
        $asistente->update([
            'nombre_asistente' => $request->input('nombre_asistente'),
            'apellidopat_asistente' => $request->input('apellidopat_asistente'),
            'apellidomat_asistente' => $request->input('apellidomat_asistente'),
            'autor_id' => $request->input('autor_id'),
        ]);
        $notification = array(
            'message' => 'Asistente actualizado',
            'alert-type' => 'info'
        );

        return to_route('asistente.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistente $asistente)
    {
        $asistente->delete();
        
        $notification = array(
            'message' => 'Asistente eliminado',
            'alert-type' => 'info'
        );

        return to_route('asistente.index')->with($notification);
    }
}
