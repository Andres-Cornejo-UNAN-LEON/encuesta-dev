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
        Schema::create('resultado_encuestas', function (Blueprint $table) {
            $table->id();
            $table->String("Respuesta",50);
            $table->foreignId('IdEncuestado')->constrained('datos_academicos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdPregunta')->constrained('Preguntas')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('resultado_encuestas');
    }
};
