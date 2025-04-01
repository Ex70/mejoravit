<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiarios extends Model
{
    protected $table = 'beneficiarios';

    protected $fillable = [
        'apellido_paterno',
        'apellido_materno',
        'nombre',
        'parentesco',

        // Foreign key
        'derechohabiente_id',
    ];

    public function derechohabiente()
    {
        return $this->belongsTo(DerechoHabiente::class);
    }
}
