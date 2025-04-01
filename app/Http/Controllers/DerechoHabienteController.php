<?php

namespace App\Http\Controllers;

use App\Models\Beneficiarios;
use App\Models\CartaProtesta;
use App\Models\DatosCredito;
use App\Models\DatosEmpresa;
use App\Models\DatosVivienda;
use App\Models\DerechoHabiente;
use App\Models\PresupuestoMejoramiento;
use App\Models\Referencias;
use Illuminate\Http\Request;

class DerechoHabienteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nss' => 'required|string|unique:derecho_habientes,nss',
            'curp' => 'required|string|unique:derecho_habientes,curp',
            'rfc' => 'required|string|unique:derecho_habientes,rfc',
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'required|string',
            'tipo_identificacion' => 'required|string',
            'identificacion' => 'required|string',
            'fecha_expedicion_identificacion' => 'required|date',
            'telefono_prefijo' => 'nullable|string|max:10',
            'telefono_fijo' => 'nullable|string|max:10',
            'telefono_celular' => 'required|string',
            'genero' => 'required|string',
            'email' => 'required|email',
            'estado_civil' => 'required|string',
            'regimen_patrimonial_del_matrimonio' => 'required|string',

            // DatosEmpresa
            'nombre_empresa' => 'required|string',
            'registro_patronal' => 'required|string',
            'telefono_empresa_prefijo' => 'nullable|string',
            'telefono_empresa_numero' => 'nullable|string',
            'telefono_empresa_extension' => 'nullable|string',

            // DatosVivienda
            'vivienda_mejorar' => 'nullable|string',
            'calle' => 'nullable|string',
            'numero_exterior' => 'nullable|string',
            'numero_interior' => 'nullable|string',
            'lote' => 'nullable|string',
            'manzana' => 'nullable|string',
            'colonia' => 'nullable|string',
            'entidad' => 'nullable|string',
            'municipio' => 'nullable|string',
            'codigo_postal' => 'nullable|string',

            // DatosCredito
            'monto_credito_solicitado' => 'required|numeric',
            'plazo_solicitado' => 'required|string',

            // Referencias
            'ref1_apellido_paterno' => 'required|string',
            'ref1_apellido_materno' => 'required|string',
            'ref1_nombre' => 'required|string',
            'ref1_telefono_celular' => 'nullable|string',

            'ref2_apellido_paterno' => 'required|string',
            'ref2_apellido_materno' => 'required|string',
            'ref2_nombre' => 'required|string',
            'ref2_telefono_celular' => 'nullable|string',

            // Beneficiarios
            'beneficiario_apellido_paterno' => 'required|string',
            'beneficiario_apellido_materno' => 'required|string',
            'beneficiario_nombre' => 'required|string',
            'beneficiario_parentesco' => 'required|string',

            // CartaProtesta
            'localidad' => 'required|string',
            'card_fecha' => 'required|date',
            'mejoras' => 'required|string',
            'nombre_completo_trabajador' => 'required|string',
            'seguridadNSS' => 'required|string',

        ]);

        $nuevoCredito = DerechoHabiente::create([
            'nss' => $request->nss,
            'curp' => $request->curp,
            'rfc' => $request->rfc,
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'tipo_identificacion' => $request->tipo_identificacion,
            'identificacion' => $request->identificacion,
            'fecha_expedicion_identificacion' => $request->fecha_expedicion_identificacion,
            'telefono_prefijo' => $request->telefono_prefijo,
            'telefono_fijo' => $request->telefono_fijo,
            'telefono_celular' => $request->telefono_celular,
            'genero' => $request->genero,
            'email' => $request->email,
            'estado_civil' => $request->estado_civil,
            'regimen_patrimonial_del_matrimonio' => $request->regimen_patrimonial_del_matrimonio,
        ]);


        $IdCredito = $nuevoCredito->id;

        $postEmpresa = new DatosEmpresa();
        $postEmpresa->nombre_empresa = $request->nombre_empresa;
        $postEmpresa->registro_patronal = $request->registro_patronal;
        $postEmpresa->telefono_prefijo = $request->telefono_empresa_prefijo;
        $postEmpresa->telefono_numero = $request->telefono_empresa_numero;
        $postEmpresa->telefono_extension = $request->telefono_empresa_extension;
        $postEmpresa->derechohabiente_id = $IdCredito;
        $postEmpresa->save();

        $postVivienda = new DatosVivienda();
        $postVivienda->vivienda_mejorar = $request->vivienda_mejorar;
        $postVivienda->calle = $request->calle;
        $postVivienda->numero_exterior = $request->numero_exterior;
        $postVivienda->numero_interior = $request->numero_interior;
        $postVivienda->lote = $request->lote;
        $postVivienda->manzana = $request->manzana;
        $postVivienda->colonia = $request->colonia;
        $postVivienda->entidad = $request->entidad;
        $postVivienda->municipio = $request->municipio;
        $postVivienda->codigo_postal = $request->codigo_postal;
        $postVivienda->derechohabiente_id = $IdCredito;
        $postVivienda->save();

        $postCredito = new DatosCredito();
        $postCredito->monto_credito = $request->monto_credito_solicitado;
        $postCredito->plazo_credito = $request->plazo_solicitado;
        $postCredito->derechohabiente_id = $IdCredito;
        $postCredito->save();

        $postReferencia = new Referencias();
        $postReferencia->primero_apellido_paterno = $request->ref1_apellido_paterno;
        $postReferencia->primero_apellido_materno = $request->ref1_apellido_materno;
        $postReferencia->primero_nombre = $request->ref1_nombre;
        $postReferencia->primero_celular = $request->ref1_celular;

        $postReferencia->segundo_apellido_paterno = $request->ref2_apellido_paterno;
        $postReferencia->segundo_apellido_materno = $request->ref2_apellido_materno;
        $postReferencia->segundo_nombre = $request->ref2_nombre;
        $postReferencia->segundo_celular = $request->ref2_celular;
        $postReferencia->derechohabiente_id = $IdCredito;
        $postReferencia->save();

        $postBeneficiario = new Beneficiarios();
        $postBeneficiario->apellido_paterno = $request->beneficiario_apellido_paterno;
        $postBeneficiario->apellido_materno = $request->beneficiario_apellido_materno;
        $postBeneficiario->nombre = $request->beneficiario_nombre;
        $postBeneficiario->parentesco = $request->beneficiario_parentesco;
        $postBeneficiario->derechohabiente_id = $IdCredito;
        $postBeneficiario->save();

        $postCartaProtesta = new CartaProtesta();
        $postCartaProtesta->localidad = $request->localidad;
        $postCartaProtesta->fecha = $request->card_fecha;
        $postCartaProtesta->descripcion = $request->mejoras;
        $postCartaProtesta->nombre_firma = $request->nombre_completo_trabajador;
        $postCartaProtesta->nss = $request->seguridadNSS;
        $postCartaProtesta->derechohabiente_id = $IdCredito;
        $postCartaProtesta->save();

        // concatenar los valores de la direccion, verificando si existe
        $direccion = collect([
            $request->calle,
            $request->numero_exterior,
            $request->numero_interior,
            $request->lote,
            $request->manzana,
            $request->colonia,
            $request->municipio,
            $request->entidad,
            $request->codigo_postal,
        ])->filter()->implode(', ');

        // Guardar los datos de la tabla 8_presupuesto_mejoramiento
        $postPresupuestoMejoramiento = new PresupuestoMejoramiento();
        $postPresupuestoMejoramiento->nombre_persona_derechohabiente = $request->nombre_completo_trabajador;
        $postPresupuestoMejoramiento->nss = $request->seguridadNSS;
        $postPresupuestoMejoramiento->direccion_mejoramiento = $direccion;
        $postPresupuestoMejoramiento->descripcion = $request->mejoras;
        $postPresupuestoMejoramiento->presupuesto_estimado = $request->monto_credito_solicitado;
        $postPresupuestoMejoramiento->fecha = $request->card_fecha;
        $postPresupuestoMejoramiento->nombre_firma = $request->nombre_completo_trabajador;
        $postPresupuestoMejoramiento->derechohabiente_id = $IdCredito;
        $postPresupuestoMejoramiento->save();

        // Retornar una respuesta JSON para indicar éxito
        return response()->json(['success' => 'Registro de inscripcion exitoso']);
    }
}
