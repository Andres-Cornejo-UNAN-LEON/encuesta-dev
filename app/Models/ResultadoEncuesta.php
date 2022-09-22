<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoEncuesta extends Model
{
    use HasFactory;
    Protected $fillable = ["Respuesta", "IdEncuestado","IdPregunta"];

    public function pregunta(){
        return $this->belongsTo(pregunta::class, "IdPregunta");
    }
    public function encuestado(){
        return $this->belongsTo(DatosAcademicos::class, "IdEncuestado");
    }
}