<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
    use HasFactory;
    Protected $fillable = ["cedula","nombre","apellido","IdSexo","IdDepartamento","IdMunicipio"];
}
