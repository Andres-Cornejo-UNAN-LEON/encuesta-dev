<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sexoController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listaDatos = Sexo::all();

        return $listaDatos;
    }

}
