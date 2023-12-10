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
        Schema::create('pi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indicador_de_bienestar');
            $table->integer('consecutivo_de_la_meta');
            $table->string('meta', 1000);
            $table->string('entidad_responsable');
            $table->string('indicador');
            $table->string('tipo_de_meta');
            $table->bigInteger('total_compromisos_2023');
            $table->bigInteger('total_obligaciones');
            $table->decimal('eficiencia_2023_avance_financiero_2023', 15, 12);
            $table->decimal('efectividad_2023', 15, 12);
            $table->decimal('eficiencia_acumulada_avance_fisico', 15, 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pi');
    }
};
