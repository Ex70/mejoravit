<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function mostrar()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Validación básica
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
        ]);

        // Guardar en la base de datos
        DB::table('formularios')->insert([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirigir con mensaje
        return redirect()->back()->with('success', 'Formulario enviado correctamente.');
    }
}
