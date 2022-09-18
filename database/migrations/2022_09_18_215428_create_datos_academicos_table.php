<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IdFacultad')->constrained('facultads')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdCarrera')->constrained('carreras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->char("anio",1);
            $table->foreignId('IdTipomatricula')->constrained('tipomatriculas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdBecado')->constrained('becados')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdDatosgenerales')->constrained('datos_generales')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_academicos');
    }
};
