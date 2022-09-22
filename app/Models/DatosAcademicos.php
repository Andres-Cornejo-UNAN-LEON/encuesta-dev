<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    use HasFactory;
    Protected $fillable = ["IdFacultad","IdCarrera","anio","IdTipomatricula","IdBecado","IdDatosgenerales"];

    public function generales(){
        return $this->belongsTo(DatosGenerales::class, "IdDatosgenerales");
    }
    public function becado(){
        return $this->belongsTo(becado::class, "IdBecado");
    }
    public function carrera(){
        return $this->belongsTo(carrera::class, "IdCarrera");
    }
    public function facultad(){
        return $this->belongsTo(Facultad::class, "IdFacultad");
    }
    public function matricula(){
        return $this->belongsTo(Tipomatricula::class, "IdTipomatricula");
    }
    public function encuesta(){
        return $this->hasMany(ResultadoEncuesta::class, "IdEncuestado");
    }
}
