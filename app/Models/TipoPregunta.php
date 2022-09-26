<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPregunta extends Model{


    public function opciones(){
        $array = [
            0=> 'categoria',
            1=> 'tiempo',
            2=> 'comodidad',
            3=> 'informacion',
            4=> 'texto'
        ];
        return $array;
    }

    public function categoria(){
        $array = [
            0=> 'malo',
            1=> 'regular',
            2=> 'bueno',
            3=> 'muy bueno',
            4=> 'excelente'
        ];
        return $array;
    }

    public function tiempo(){
        $array = [
            0=> 'nunca',
            1=> 'casi nunca',
            2=> 'algunas veces',
            3=> 'siempre'
        ];
        return $array;
    }

    public function comodidad(){
        $array = [
            0=> 'mayor comodidad',
            1=> 'mayor facilidad para matricularse',
            2=> 'ahorra tiempo'
        ];
        return $array;
    }

    public function info(){
        $array = [
            0=> 'que de mas informacion',
            1=> 'que se mas moderno',
            2=> 'que funcione con mayor facilidad y rapidez',
            3=> 'que este mas disponible'
        ];
        return $array;
    }
}