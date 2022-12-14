@extends('layouts.principal')

@vite(['resources/js/jquery/jquery-3.6.1.min.js','resources/js/datosAcademicos/datosAcademicos.js'])
@section('content')
<div class="form-datosGenerales">
    <h1>Ingrese sus Datos Academicos</h1>
    <form action="{{ route('DatosAcademicos.create') }}" method="POST" class="formulario" >@csrf
        <input type="text" name="IdDatosgenerales" value="{{$datos->id}}" class="iddatos">
        <div class="form-control">
            <label for="IdFacultad">Facultad</label>
            <select name="IdFacultad" id="IdFacultad" required>
                <option value="">----Seleccionar----</option>
                @foreach($facultad as $key => $value)
                <option value="{{$value->id}}">{{$value->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control">
            <label for="IdCarrera">Carrera</label>
            <select name="IdCarrera" id="IdCarrera" required>

            </select>
        </div>
        <div class="form-control">
            <label for="anio">Año que cursa</label>
            <input type="number" name="anio" id="anio" required>
        </div>
        <div class="form-control">
            <label for="IdTipomatricula">Tipo de Matricula</label>
            <select name="IdTipomatricula" id="IdTipomatricula" required>
                <option value="">----Seleccionar----</option>
                @foreach($tipoMat as $key => $value)
                <option value="{{$value->id}}">{{$value->tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control">
            <label for="IdBecado">Tipo de Beca</label>
            <select name="IdBecado" id="IdBecado" required>
                <option value="">----Seleccionar----</option>
                @foreach($beca as $key => $value)
                <option value="{{$value->id}}">{{$value->Tipobecado}}</option>
                @endforeach
            </select>
        </div>
        <div class="botones">
        <input type="submit" value="Siguiente" name="siguiente" class="boton-siguiente">
        </div>
        
    </form>
</div>
@endsection
@vite(['resources/js/app.js'])
