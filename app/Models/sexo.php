<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
    use HasFactory;

    Protected $fillable = ["genero"];

    public function generales(){
        return $this->hasMany(DatosGenerales::class, "IdSexo");
    }
}
