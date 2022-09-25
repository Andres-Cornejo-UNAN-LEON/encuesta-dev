<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\municipio;

class municipioController extends Controller
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
        $listaDatos = municipio::all();

        return $listaDatos;
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show($IdDepartamento)
    {
        //
        $listaDatos = municipio::where('IdDepartamento', '=', $IdDepartamento)->get();
        return $listaDatos;
    }

}
