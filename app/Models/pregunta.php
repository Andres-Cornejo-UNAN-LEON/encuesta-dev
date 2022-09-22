<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;
    Protected $fillable = ["nombre", "Tipopregunta"];
    
    public function encuesta(){
        return $this->hasmany(ResultadoEncuesta::class, "IdPregunta");
    }
}