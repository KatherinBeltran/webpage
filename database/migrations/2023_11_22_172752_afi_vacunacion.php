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
        Schema::create('afi_vacunacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indicadores_pts');
            $table->string('año');
            $table->integer('numerador')->nullable();
            $table->integer('denominador')->nullable();
            $table->decimal('indicador', 15, 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('afi_vacunacion');
    }
};