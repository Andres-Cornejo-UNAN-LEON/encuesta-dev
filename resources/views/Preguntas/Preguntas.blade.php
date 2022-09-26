@extends('layouts.principal')

@section('content')
<div class="container">
    <h1>Conteste las siguientes preguntas</h1>
    <form action="{{ route('Pregunta.create') }}" method="POST" class="formulario">@csrf
        <input type="text" name="IdEncuestado" value="{{$IdDatosGenerales}}" class="iddatos">
        @for($i=0; $i<@count($nuevaLista); $i++) 
        <div class="card_preguntas">
            <div class="body">
                <div class="form-control">
                    <label for="pregunta">{{$nuevaLista[$i]->pregunta}}</label>
                    @if($nuevaLista[$i]->Tipopregunta == 'insertar')
                    <input type="number" name="respuesta{{$nuevaLista[$i]->id}}" id="respuesta" class="respuesta"
                        required>
                    @else
                    <select name="respuesta{{$nuevaLista[$i]->id}}" class="respuesta" required>
                        <option value="">----Seleccionar----</option>
                        @foreach($nuevaLista[$i]->Tipopregunta as $tipo)
                        <option value="{{$tipo}}">{{$tipo}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
</div>
@endfor
<div class="botones">
    <input type="submit" value="Guardar" class="boton-siguiente">
</div>

</form>
</div>

@endsection

@vite(['resources/js/app.js'])