<?php

namespace App\Http\Controllers;

use App\Models\Afiliacion;
use App\Models\Autor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $autores = Autor::with('afiliacion')->get();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $afiliacion = Afiliacion::all();
        return view('autores.create', compact('afiliacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request -> validated();
        //Autor::create($data);

        Autor::create([
            'nombre_autor' => $request->input('nombre_autor'),
            'apellidopat_autor' => $request->input('apellidopat_autor'),
            'apellidomat_autor' => $request->input('apellidomat_autor'),
            'afiliacion_id' => $request->input('afiliacion_id'),
        ]);
        $notification = array(
            'message' => 'Autor agregado',
            'alert-type' => 'info'
        );

        return to_route('autor.index')->with($notification);
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
    public function edit(Autor $autor): View
    {
        $afiliacion = Afiliacion::all();
        return view('autores.edit', compact('afiliacion', 'autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $autor->update([
            'nombre_autor' => $request->input('nombre_autor'),
            'apellidopat_autor' => $request->input('apellidopat_autor'),
            'apellidomat_autor' => $request->input('apellidomat_autor'),
            'afiliacion_id' => $request->input('afiliacion_id'),
        ]);

        $notification = array(
            'message' => 'Autor actualizado',
            'alert-type' => 'info'
        );

        return to_route('autor.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
        
        $notification = array(
            'message' => 'Autor eliminado',
            'alert-type' => 'info'
        );

        return to_route('autor.index')->with($notification);
    }
}
