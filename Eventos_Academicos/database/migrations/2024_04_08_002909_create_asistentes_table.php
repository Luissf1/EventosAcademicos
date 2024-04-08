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
        Schema::create('asistentes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_asistente");
            $table->string("apellidopat_asistente");
            $table->string("apellidomat_asistente");
            $table->foreignId("autor_id")->constrained()->cascadeOnDelete();
            //$table->foreignId("autor_id")->references('id')->on('autors')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistentes');
    }
};
