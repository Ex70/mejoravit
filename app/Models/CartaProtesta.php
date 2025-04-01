<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartaProtesta extends Model
{
    protected $table = 'carta_protestas';

    protected $fillable = [
        'localidad',
        'fecha',
        'descripcion',
        'nombre_firma',
        'nss',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
