@extends('layouts.principal')
@section('content')
    <h1><small class="text-muted"><b>Nombre:</b> {{$datos->generales->nombre}} {{$datos->generales->apellido}}</small></h1>
    <h3><small class="text-muted"><b>Cedula:</b> {{$datos->generales->cedula}}</small></h3>
    <h3><small class="text-muted"><b>Sexo:</b> {{$datos->generales->sexo->genero}}</small></h3>
    <h3><small class="text-muted"><b>Departamento:</b> {{$datos->generales->departamento->nombre}}</small></h3>
    <h3><small class="text-muted"><b>Municipio:</b> {{$datos->generales->municipio->nombre}}</small></h3>
    <h3><small class="text-muted"><b>Tipo Matricula:</b> {{$datos->matricula->tipo}}</small></h3>
    <h3><small class="text-muted"><b>Tipo de Beca:</b> {{$datos->becado->Tipobecado}}</small></h3>
    <h3><small class="text-muted"><b>Carrera:</b> {{$datos->carrera->nombre}}</small></h3>
    <h3><small class="text-muted"><b>Facultad:</b> {{$datos->facultad->nombre}}</small></h3>
    <h3><small class="text-muted"><b>A&ntilde;o de estudio:</b> {{$datos->anio}}</small></h3>
@endsection