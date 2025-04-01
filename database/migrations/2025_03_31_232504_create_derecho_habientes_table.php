<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('derecho_habientes', function (Blueprint $table) {
            $table->id();
            $table->string('nss')->unique();
            $table->string('curp')->unique();
            $table->string('rfc')->unique();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('tipo_identificacion');
            $table->string('identificacion')->unique();
            $table->date('fecha_expedicion_identificacion');
            $table->string('telefono_prefijo')->nullable();
            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_celular')->unique();
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('regimen_patrimonial_del_matrimonio');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('derecho_habientes');
    }
};
