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
        Schema::create('datos_generales', function (Blueprint $table) {
            $table->id();
            $table->String("cedula",50);
            $table->String("nombre",50);
            $table->String("apellido",50);
            $table->foreignId('IdSexo')->constrained('sexos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdDepartamento')->constrained('departamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('IdMunicipio')->constrained('municipios')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('datos_generales');
    }
};
