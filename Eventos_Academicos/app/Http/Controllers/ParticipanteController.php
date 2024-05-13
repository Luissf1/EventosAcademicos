<?php

namespace App\Http\Controllers;

use App\Models\Correo_Participantes;
use App\Models\Participantes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //$participantes = Participantes::with('correo_participante')->get();
        $participantes = Participantes::has('correo_participantes');

        return view('participantes\index', compact('participantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //$correoparticipante = Correo_Participantes::all();
        $correoparticipante =Participantes::has('correo_participantes');
        return view('participantes.create', compact('correoparticipante'));
        //return view('participantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Correo_Participantes $correo)
    {
        $participante= Participantes::create([
            'nombre_participante' => $request->input('nombre_participante'),
            'apellidopat_participante' => $request->input('apellidopat_participante'),
            'apellidomat_participante' => $request->input('apellidomat_participante'),
        ]);

        $correo->create([
            'participante_id' => $participante->id,
            'correo_participante' => $request->input('$correo_participante'),
        ]);

        $notification = array(
            'message' => 'Participante agregado',
            'alert-type' => 'info'
        );

        return to_route('participante.index')->with($notification);
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
    public function edit(Participantes $participante): View
    {
        //$correo = Correo_Participantes::all();
        //return view('participante.edit', compact('correo', 'participante'));
        return view('participante.edit', compact('participante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participantes $participante,Correo_Participantes $correo)
    {
        $participante->update([
            'nombre_participante' => $request->input('nombre_participante'),
            'apellidopat_participante' => $request->input('apellidopat_participante'),
            'apellidomat_participante' => $request->input('apellidomat_participante'),
        ]);

        /*$correo->update([
            'correo_participante' => $request->input('correo_participante'),
        ]);*/

        $notification = array(
            'message' => 'Participante actualizado',
            'alert-type' => 'info'
        );

        return to_route('participante.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participantes $participante):RedirectResponse
    {
        $participante->delete();
        return to_route('participante.index');
    }
}
