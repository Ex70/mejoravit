<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencias extends Model
{
    protected $table = 'referencias';

    protected $fillable = [
        'primero_apellido_paterno',
        'primero_apellido_materno',
        'primero_nombre',
        'primero_celular',
        'segundo_apellido_paterno',
        'segundo_apellido_materno',
        'segundo_nombre',
        'segundo_celular',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
