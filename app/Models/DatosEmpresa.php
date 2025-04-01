<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosEmpresa extends Model
{
    protected $table = 'datos_empresas';

    protected $fillable = [
        'nombre_empresa',
        'registro_patronal',
        'telefono_prefijo',
        'telefono_numero',
        'telefono_extension',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
