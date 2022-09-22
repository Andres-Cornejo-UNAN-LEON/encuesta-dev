<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    Protected $fillable = ["nombre","IdFacultad"];
    public function facultad(){
        return $this->hasMany(Facultad::class, "IdFacultad");
    }
    public function academicos(){
        return $this->hasMany(DatosAcademicos::class, "IdCarrera");
    }
}
