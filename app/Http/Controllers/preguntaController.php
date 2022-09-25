<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;

class preguntaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $listaDatos = pregunta::all();

        return $listaDatos;
    }
}
