<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosVivienda extends Model
{
    protected $table = 'datos_viviendas';

    protected $fillable = [
        'vivienda_mejorar',
        'calle',
        'numero_exterior',
        'numero_interior',
        'lote',
        'manzana',
        'colonia',
        'entidad',
        'municipio',
        'codigo_postal',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
