<?php

namespace App\Http\Controllers;

use App\Models\DatosAcademicos;
use App\Http\Requests\StoreDatosAcademicosRequest;
use App\Http\Requests\UpdateDatosAcademicosRequest;
use App\Models\Facultad;
use App\Models\Becado;
use App\Models\Tipomatricula;
use App\Models\DatosGenerales;
use Illuminate\Http\Request;

class DatosAcademicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ultimo = DatosGenerales::select("id")->latest()->first();
        $facultad = Facultad::all();
        $beca = Becado::all();
        $tipoMat = Tipomatricula::all();

        return view('DatosAcademicos.DatosAcademicos', compact('ultimo','facultad', 'beca', 'tipoMat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        $datos = DatosAcademicos::create([
            'IdDatosgenerales' => $data->input('IdDatosgenerales'),
            'IdFacultad' => $data->input('IdFacultad'),
            'IdCarrera' => $data->input('IdCarrera'),
            'anio' => $data->input('anio'),
            'IdTipomatricula' => $data->input('IdTipomatricula'),
            'IdBecado' => $data->input('IdBecado'),
        ]);
        return view('DatosAcademicos.DatosAcademicos');
      
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
