<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosCredito extends Model
{
    protected $table = 'datos_creditos';

    protected $fillable = [
        'monto_credito',
        'plazo_credito',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
