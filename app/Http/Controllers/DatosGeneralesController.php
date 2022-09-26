<?php

namespace App\Http\Controllers;

use App\Models\DatosGenerales;
use App\Http\Requests\StoreDatosGeneralesRequest;
use App\Http\Requests\UpdateDatosGeneralesRequest;
use App\Models\sexo;
use App\Models\departamento;
use App\Models\municipio;
use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Becado;
use App\Models\Tipomatricula;

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
        $sexo = Sexo::all();
        $departamento = departamento::all();

        return View('DatosGenerales.DatosGenerales', compact('sexo', 'departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {
        //
        $datos = DatosGenerales::create([
            'cedula' => $data->input('cedula'),
            'nombre' => $data->input('nombre'),
            'apellido' => $data->input('apellido'),
            'IdSexo' => $data->input('IdSexo'),
            'IdDepartamento' => $data->input('IdDepartamento'),
            'IdMunicipio' => $data->input('IdMunicipio'),
        ]);
        $facultad = Facultad::all();
        $beca = Becado::all();
        $tipoMat = Tipomatricula::all();
        $nombreCompleto = $datos->nombre.' '.$datos->apellido;
        $cedula = $datos->cedula;

        return view('DatosAcademicos.DatosAcademicos', compact('datos','nombreCompleto','cedula','facultad','beca', 'tipoMat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDatosGeneralesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatosGeneralesRequest $request)
    {
        DatosGenerales::created($request->all());
        return response("200", "Datos almacenado correctamente");
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
