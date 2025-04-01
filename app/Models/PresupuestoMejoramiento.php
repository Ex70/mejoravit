<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PresupuestoMejoramiento extends Model
{
    protected $table = 'presupuesto_mejoramientos';

    protected $fillable = [
        'nombre_persona_derechohabiente',
        'nss',
        'direccion_mejoramiento',
        'descripcion',
        'presupuesto_estimado',
        'fecha',
        'nombre_firma',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
