<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DerechoHabiente extends Model
{
    protected $table = 'derecho_habientes';

    protected $fillable = [
        'nss',
        'curp',
        'rfc',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'tipo_identificacion',
        'identificacion',
        'fecha_expedicion_identificacion',
        'telefono_prefijo',
        'telefono_fijo',
        'telefono_celular',
        'genero',
        'email',
        'estado_civil',
        'regimen_patrimonial_del_matrimonio'
    ];

    public function datosempresa()
    {
        return $this->hasMany(DatosEmpresa::class, 'derechohabiente_id');
    }

    public function datosvivienda()
    {
        return $this->hasMany(DatosVivienda::class, 'derechohabiente_id');
    }

    public function datoscredito()
    {
        return $this->hasMany(DatosCredito::class, 'derechohabiente_id');
    }

    public function beneficiarios()
    {
        return $this->hasMany(Beneficiarios::class, 'derechohabiente_id');
    }

    public function cartaprotesta()
    {
        return $this->hasMany(CartaProtesta::class, 'derechohabiente_id');
    }

    public function presupuestomejoramiento()
    {
        return $this->hasMany(PresupuestoMejoramiento::class, 'derechohabiente_id');
    }

    public function referencias()
    {
        return $this->hasMany(Referencias::class, 'derechohabiente_id');
    }
}
