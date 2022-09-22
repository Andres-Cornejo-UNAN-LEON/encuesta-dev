<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Becado extends Model
{
    use HasFactory;
    Protected $fillable = ["Tipobecado"];
    
    public function academicos(){
        return $this->hasMany(DatosAcademicos::class, "IdBecado");
    }
}
