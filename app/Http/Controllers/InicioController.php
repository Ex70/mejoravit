<?php

namespace App\Http\Controllers;

use App\Models\DerechoHabiente;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $request)
    {

        $listaRegistros = DerechoHabiente::with(
            'datosempresa',
            'datosvivienda',
            'datoscredito',
            'beneficiarios',
            'cartaprotesta',
            'presupuestomejoramiento',
            'referencias'
        )
        ->paginate(10);

        if ($request->ajax()) {
            return view('partials.TablaRegistros', compact('listaRegistros'))->render();
        }

        return view('admin', compact('listaRegistros'));

    }
}
