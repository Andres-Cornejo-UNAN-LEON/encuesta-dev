@extends('layouts.principal')

@section('content')
<div class="container">
    <h3>Lista de preguntas</h3>
    <table class="tabla">
        <th>id</th>
        <th>Pregunta</th>
        <th>Tipo Pregunta</th>
        @foreach($listaDatos as $datos)
            <tr>
                <td align="center">
                    <p>{{$datos->id}}</p>
                </td>
                <td>
                    <p>
                        {{$datos->pregunta}}
                    </p>
                </td>
                <td>
                    <p>
                        {{$datos->Tipopregunta}}
                    </p>
                </td>
            </tr>
        @endforeach
    </table>
</div>

 @endsection
@vite(['resources/js/app.js'])
