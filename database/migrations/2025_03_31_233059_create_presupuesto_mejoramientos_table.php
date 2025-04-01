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
        Schema::create('presupuesto_mejoramientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_persona_derechohabiente')->nullable();
            $table->string('nss')->nullable();
            $table->string('direccion_mejoramiento')->nullable();
            $table->text('descripcion')->nullable();
            $table->float('presupuesto_estimado', 20, 2);
            $table->date('fecha')->nullable();
            $table->string('nombre_firma')->nullable();
            $table->foreignId('derechohabiente_id')->constrained('derecho_habientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuesto_mejoramientos');
    }
};
