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
        Schema::create('desercion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_etc');
            $table->integer('año');
            $table->decimal('desercion_transicion', 15, 12);
            $table->decimal('desercion_primaria', 15, 12);
            $table->decimal('desercion_secundaria', 15, 12);
            $table->decimal('desercion_media', 15, 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desercion');
    }
};
