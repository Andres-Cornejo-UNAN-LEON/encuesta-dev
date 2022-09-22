<?php

namespace App\Http\Controllers;

use App\Models\ResultadoEncuesta;
use App\Http\Requests\StoreResultadoEncuestaRequest;
use App\Http\Requests\UpdateResultadoEncuestaRequest;

class ResultadoEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = ResultadoEncuesta::where("IdEncuestado", 1)->get();
        return dd($encuestas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResultadoEncuestaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResultadoEncuestaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function show(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResultadoEncuestaRequest  $request
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResultadoEncuestaRequest $request, ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResultadoEncuesta  $resultadoEncuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResultadoEncuesta $resultadoEncuesta)
    {
        //
    }
}
