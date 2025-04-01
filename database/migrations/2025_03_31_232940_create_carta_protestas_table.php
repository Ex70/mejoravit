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
        Schema::create('carta_protestas', function (Blueprint $table) {
            $table->id();
            $table->string('localidad')->nullable();
            $table->date('fecha')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('nombre_firma')->nullable();
            $table->string('nss')->nullable();
            $table->foreignId('derechohabiente_id')->constrained('derecho_habientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carta_protestas');
    }
};
