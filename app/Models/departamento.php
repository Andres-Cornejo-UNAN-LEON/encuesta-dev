<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;

    Protected $fillable = ["nombre"];
    public function generales(){
        return $this->hasMany(DatosGenerales::class, "IdDepartamento");
    }
    public function municipio(){
        return $this->belongsTo(municipio::class, "IdDepartamento");
    }
}
