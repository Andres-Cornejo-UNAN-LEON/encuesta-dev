<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;
    Protected $fillable = ["nombre"];
    public function carrera(){
        return $this->belongsTo(Carrera::class, "IdFacultad");
    }
    public function academicos(){
        return $this->hasMany(DatosAcademicos::class, "IdFacultad");
    }
}
