<?php

namespace App\Http\Controllers;

use App\Models\DatosGenerales;
use App\Http\Requests\StoreDatosGeneralesRequest;
use App\Http\Requests\UpdateDatosGeneralesRequest;

class DatosGeneralesController extends Controller
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
     * @param  \App\Http\Requests\StoreDatosGeneralesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatosGeneralesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function show(DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatosGeneralesRequest  $request
     * @param  \App\Models\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDatosGeneralesRequest $request, DatosGenerales $datosGenerales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatosGenerales  $datosGenerales
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosGenerales $datosGenerales)
    {
        //
    }
}
