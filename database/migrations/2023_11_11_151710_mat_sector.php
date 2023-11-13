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
        Schema::create('mat_sector', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entidad');
            $table->string('grado');
            $table->integer('año');
            $table->integer('oficial');
            $table->integer('contratada');
            $table->integer('privada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mat_sector');
    }
};