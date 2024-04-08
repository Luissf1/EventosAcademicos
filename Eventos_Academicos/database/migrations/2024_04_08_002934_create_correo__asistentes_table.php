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
        Schema::create('correo__asistentes', function (Blueprint $table) {
            //$table->foreignId("asistente_id")->references('id')->on('asistentes')->constrained()->cascadeOnDelete();
            $table->foreignId("asistente_id")->constrained()->cascadeOnDelete();
            $table->string("correo_asistente");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correo__asistentes');
    }
};
