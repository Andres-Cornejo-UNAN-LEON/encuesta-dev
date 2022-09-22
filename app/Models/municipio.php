<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    use HasFactory;
    
    Protected $fillable = ["nombre", "IdDepartamento"];
    public function generales(){
        return $this->hasMany(DatosGenerales::class, "IdMunicipio");
    }
    public function departamento(){
        return $this->hasMany(departamento::class, "IdDepartamento");
    }
}
