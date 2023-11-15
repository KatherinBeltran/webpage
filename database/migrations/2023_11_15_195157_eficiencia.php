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
        Schema::create('eficiencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_etc');
            $table->integer('año');
            $table->string('sector');
            $table->decimal('aprobado', 15, 12);
            $table->decimal('desertor', 15, 12);
            $table->decimal('reprobado', 15, 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};