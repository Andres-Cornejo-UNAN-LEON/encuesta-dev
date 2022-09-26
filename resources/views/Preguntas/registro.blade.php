@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="form-preguntas">
    <h1>Agregar Preguntas</h1>
    <form action="{{ route('Pregunta.save') }}" method="POST" class="formulario">@csrf
        <div class="form-control_">
                <label for="Pregunta">Pregunta</label>
                <input type="text" name="pregunta" placeholder="pregunta" required class="pregunta">
</div> 
<div class="form-control_">
<label for="TipoPregunta">Tipo de pregunta</label>
                <select name="tipoPregunta" id="TipoPregunta" class="pregunta" required>
                    @foreach($listaDatos as $tipo)
                    <option value="{{$tipo}}">{{$tipo}}</option>
                    @endforeach
                </select>  
</div>       
            <div class="botones">
                <input type="submit" value="Agregar" class="boton-siguiente">
            </div>
    </form>
    </div>
    
    </div>
    
</div>
@endsection

@vite(['resources/js/app.js'])
