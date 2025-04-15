<?php

namespace App\Http\Controllers;

use App\Models\DatosEmpresa;
use App\Models\DerechoHabiente;
use App\Models\DatosVivienda;
use App\Models\DatosCredito;
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
            'p1_regimen_patrimonial' => 'required',

            'p2_nombre_empresa' => 'required',
            'p2_nrpp' => 'required',
            'p2_lada_empresa' => 'required',
            'p2_numero_empresa' => 'required',
            'p2_extension_empresa' => 'required',

            'p3_vivienda' => 'required',
            'p3_calle' => 'required',
            'p3_colonia' => 'required',
            'p3_no_ext' => 'required',
            'p3_no_int' => 'nullable',
            'p3_lote' => 'nullable',
            'p3_mza' => 'nullable',
            'p3_entidad' => 'required',
            'p3_municipio' => 'required',
            'p3_codigo_postal' => 'required',

            'p4_monto_credito1' => 'required',
            'p4_monto_credito2' => 'required',
            'p4_monto_credito3' => 'required',
            'p4_monto_credito4' => 'required',

        ]);

        $nuevoCredito = DerechoHabiente::create([
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
            'email' => $request->p1_email,
            'estado_civil' => $request->p1_estado_civil,
            'regimen_patrimonial_del_matrimonio' => $request->p1_regimen_patrimonial,
        ]);

        $datosEmpresa = DatosEmpresa::create([
            'nombre_empresa' => $request->p2_nombre_empresa,
            'registro_patronal' => $request->p2_nrpp,
            'telefono_prefijo' => $request->p2_lada_empresa,
            'telefono_numero' => $request->p2_numero_empresa,
            'telefono_extension' => $request->p2_extension_empresa,
            'derechohabiente_id' => $nuevoCredito->id, // <-- relación directa
        ]);


        $datosVivienda = DatosVivienda::create([
            'vivienda_mejorar' => $request->p3_vivienda,
            'calle' => $request->p3_calle,
            'numero_exterior' => $request->p3_no_ext,
            'numero_interior' => $request->p3_no_int,
            'lote' => $request->p3_lote,
            'manzana' => $request->p3_mza,
            'colonia' => $request->p3_colonia,
            'entidad' => $request->p3_entidad,
            'municipio' => $request->p3_municipio,
            'codigo_postal' => $request->p3_codigo_postal,
            'derechohabiente_id' => $nuevoCredito->id,

        ]);

        // Obtener los valores como string por si vienen con ceros al inicio
        $monto1 = str_pad($request->p4_monto_credito1, 3, '0', STR_PAD_LEFT);
        $monto2 = str_pad($request->p4_monto_credito2, 3, '0', STR_PAD_LEFT);
        $monto3 = str_pad($request->p4_monto_credito3, 2, '0', STR_PAD_LEFT);
        $plazo = $request->p4_monto_credito4;


        // Concatenar todo en formato de número decimal
        $montoCompleto = floatval("{$monto1}{$monto2}.{$monto3}");

        // Redondear SIEMPRE hacia arriba al millar más cercano
        $montoFinal = ceil($montoCompleto / 1000) * 1000;

        $datosCredito = DatosCredito::create([
            'monto_credito' => $montoFinal,
            'plazo_credito' => $plazo,
            'derechohabiente_id' => $nuevoCredito->id, // Asegúrate que esta variable exista
        ]);



        // $IdCredito = $nuevoCredito->id;

        // $postEmpresa = new DatosEmpresa();
        // $postEmpresa->nombre_empresa = $request->p2_nombre_empresa;
        // $postEmpresa->registro_patronal = $request->p2_nrpp;
        // $postEmpresa->telefono_prefijo = $request->p2_lada_empresa;
        // $postEmpresa->telefono_numero = $request->p2_numero_empresa;
        // $postEmpresa->telefono_extension = $request->p2_extension_empresa;
        // $postEmpresa->derechohabiente_id = $IdCredito;
        // $postEmpresa->save();


        return redirect()->back()->with('success', 'Datos guardados correctamente.');
    }
}
