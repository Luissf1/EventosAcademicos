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
        Schema::create('correo__autors', function (Blueprint $table) {
            //$table->foreignId("autor_id")->references('id')->on('autors')->constrained()->cascadeOnDelete();
            $table->foreignId("autor_id")->constrained()->cascadeOnDelete();
            $table->string("correo_autor");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correo__autors');
    }
};
