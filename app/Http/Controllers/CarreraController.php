<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    //

    public function show($IdFacultad){
        $listaDatos = Carrera::where('IdFacultad', '=', $IdFacultad)->get();
        return $listaDatos;
    }
}
