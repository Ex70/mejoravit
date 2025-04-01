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
        Schema::create('referencias', function (Blueprint $table) {
            $table->id();
            $table->string('primero_apellido_paterno')->nullable();
            $table->string('primero_apellido_materno')->nullable();
            $table->string('primero_nombre')->nullable();
            $table->string('primero_celular')->nullable();

            $table->string('segundo_apellido_paterno')->nullable();
            $table->string('segundo_apellido_materno')->nullable();
            $table->string('segundo_nombre')->nullable();
            $table->string('segundo_celular')->nullable();
            $table->foreignId('derechohabiente_id')->constrained('derecho_habientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencias');
    }
};
