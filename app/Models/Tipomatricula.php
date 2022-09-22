<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipomatricula extends Model
{
    use HasFactory;
    Protected $fillable = ["tipo"];

    public function academicos(){
        return $this->hasMany(DatosAcademicos::class, "IdTipomatricula");
    }
}
