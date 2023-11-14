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
        Schema::create('cob_neta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_etc');
            $table->integer('año');
            $table->decimal('cobertura_neta_transicion', 15, 12);
            $table->decimal('cobertura_neta_primaria', 15, 12);
            $table->decimal('cobertura_neta_secundaria', 15, 12);
            $table->decimal('cobertura_neta_media', 15, 12);
            $table->decimal('cobertura_neta_basica', 15, 12);
            $table->decimal('cobertura_neta', 15, 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cob_neta');
    }
};