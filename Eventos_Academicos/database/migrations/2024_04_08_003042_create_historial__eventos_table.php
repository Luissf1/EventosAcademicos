<?php

use App\Models\Historial_Eventos;
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
        Schema::create('historial__eventos', function (Blueprint $table) {
            $table->id();
            //$table->foreignId("evento_id")->references('id')->on('eventos')->constrained()->cascadeOnDelete();
            $table->foreignId("evento_id")->constrained()->cascadeOnDelete();
            $table->string("nombre_historialevento");
            $table->date("Fecha_HistorialEvento");
            $table->timestamps();
        });

        /*Schema::getConnection()->unprepared('
            CREATE TRIGGER trigger_name
            AFTER INSERT ON table_name
            FOR EACH ROW
            BEGIN
                -- actions to perform when the trigger is fired
            END
        ');*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial__eventos');

        //Schema::getConnection()->unprepared('DROP TRIGGER IF EXISTS historial');
    }
};
