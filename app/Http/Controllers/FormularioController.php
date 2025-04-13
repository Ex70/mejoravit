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
        // Validación
        $request->validate([
            'p1_nss' => 'required',
            'p1_curp' => 'required',
            'p1_rfc' => 'required',
            'p1_nombres' => 'required',
            'p1_apellido_paterno' => 'required',
            'p1_apellido_materno' => 'required',
            'p1_tipo_identificacion' => 'required',
            'p1_numero_identificacion' => 'required',
            'p1_fecha_validez_identificacion' => 'required|date',
            'p1_email' => 'required|email',
            'p1_lada' => 'required',
            'p1_numero' => 'required',
            'p1_celular' => 'required',
            'p1_sexo' => 'required',
            'p1_estado_civil' => 'required',
            // p1_regimen_patrimonial puede ir como nullable
        ]);

        DB::table('derecho_habientes')->insert([
            'nss' => $request->p1_nss,
            'curp' => $request->p1_curp,
            'rfc' => $request->p1_rfc,
            'nombre' => $request->p1_nombres,
            'apellido_paterno' => $request->p1_apellido_paterno,
            'apellido_materno' => $request->p1_apellido_materno,
            'tipo_identificacion' => $request->p1_tipo_identificacion,
            'identificacion' => $request->p1_numero_identificacion,
            'fecha_expedicion_identificacion' => $request->p1_fecha_validez_identificacion,
            'telefono_prefijo' => $request->p1_lada,
            'telefono_fijo' => $request->p1_numero,
            'telefono_celular' => $request->p1_celular,
            'genero' => $request->p1_sexo,
            'estado_civil' => $request->p1_estado_civil,
            'regimen_patrimonial_del_matrimonio' => $request->p1_regimen_patrimonial,
            'email' => $request->p1_email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Datos guardados correctamente.');
    }
}
