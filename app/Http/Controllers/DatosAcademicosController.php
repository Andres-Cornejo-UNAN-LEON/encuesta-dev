<?php

namespace App\Http\Controllers;

use App\Models\DatosAcademicos;
use App\Http\Requests\StoreDatosAcademicosRequest;
use App\Http\Requests\UpdateDatosAcademicosRequest;

class DatosAcademicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDatosAcademicosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatosAcademicosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatosAcademicos  $datosAcademicos
     * @return \Illuminate\Http\Response
     */
    public function show(DatosAcademicos $datosAcademicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosAcademicos  $datosAcademicos
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosAcademicos $datosAcademicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatosAcademicosRequest  $request
     * @param  \App\Models\DatosAcademicos  $datosAcademicos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatosAcademicosRequest $request, DatosAcademicos $datosAcademicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosAcademicos  $datosAcademicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosAcademicos $datosAcademicos)
    {
        //
    }
}
