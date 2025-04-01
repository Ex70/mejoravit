<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrarEmpleadorController extends Controller
{
    public function index()
    {
        return view('registrarEmpleador');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|string|unique:users,email',
            'identificacion' => 'required|numeric|unique:users,identification',
            'rol' => 'required|string',
        ]);


        $password = Hash::make($request->identificacion);


        User::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            'identification' => $request->identificacion,
            'role' => $request->rol,
            'state' => 'activo',
            'password' => $password,
        ]);

        // Retorno un mensaje de éxito
        return response()->json(['success' => 'Empleador registrado exitosamente']);
    }
}
