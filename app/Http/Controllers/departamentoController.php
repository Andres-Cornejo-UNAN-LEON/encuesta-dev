<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class departamentoController extends Controller
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
        $listaDatos = departamento::all();

        return $listaDatos;
    }

}
