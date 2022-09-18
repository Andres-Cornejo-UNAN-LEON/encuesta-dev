<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    use HasFactory;
    Protected $fillable = ["IdFacultad","IdCarrera","anio","IdTipomatricula","IdBecado","IdDatosgenerales"];
}
