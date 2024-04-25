<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke()
    {
        $eventos = Evento::orderBy('created_at', 'asc')->get();
        return view('welcome', compact('eventos'));
    }
}
