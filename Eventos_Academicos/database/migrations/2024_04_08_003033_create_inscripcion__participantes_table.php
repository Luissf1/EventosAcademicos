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
        Schema::create('inscripcion__participantes', function (Blueprint $table) {
            //$table->foreignId("inscripcion_id")->references('id')->on('inscripcions')->constrained()->cascadeOnDelete();
            //$table->foreignId("participante_id")->references('id')->on('participantes')->constrained()->cascadeOnDelete();
            $table->foreignId("inscripcion_id")->constrained()->cascadeOnDelete();
            $table->foreignId("participante_id")->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcion__participantes');
    }
};
