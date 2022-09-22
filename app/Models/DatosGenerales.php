<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
    use HasFactory;
    Protected $fillable = ["cedula","nombre","apellido","IdSexo","IdDepartamento","IdMunicipio"];
    public function sexo(){
        return $this->belongsTo(sexo::class, "IdSexo");
    }
    public function departamento(){
        return $this->belongsTo(departamento::class, "IdDepartamento");
    }
    public function municipio(){
        return $this->belongsTo(municipio::class, "IdMunicipio");
    }
    public function academicos(){
        return $this->hasOne(DatosAcademicos::class, "IdDatosgenerales");
    }
}
