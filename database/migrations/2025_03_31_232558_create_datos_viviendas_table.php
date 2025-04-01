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
        Schema::create('datos_viviendas', function (Blueprint $table) {
            $table->id();
            $table->string('vivienda_mejorar')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('lote')->nullable();
            $table->string('manzana')->nullable();
            $table->string('colonia')->nullable();
            $table->string('entidad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->foreignId('derechohabiente_id')->constrained('derecho_habientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_viviendas');
    }
};
