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
        Schema::create('datos_creditos', function (Blueprint $table) {
            $table->id();
            $table->float('monto_credito', 20, 2);
            $table->string('plazo_credito');
            $table->foreignId('derechohabiente_id')->constrained('derecho_habientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_creditos');
    }
};
