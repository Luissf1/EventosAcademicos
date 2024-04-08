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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_evento");
            $table->string("enlace_evento");
            $table->date("fecha_evento");
            $table->foreignId("tipo_evento_id")->constrained()->cascadeOnDelete();
            //$table->foreignId("tipo_evento_id")->references('id')->on('tipo_eventos')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
