@extends('layouts.principal')

@section('content')
@if (count($listaDatos) > 0)

<table class='table'>
    <tr>
        <th scope='col'> Id </th>
        <th scope='col'> Pregunta </th>
    </tr>
    @foreach($listaDatos as $data)
    <tr>
        <td align='center'>
            <p>{{data->id}}</p>
        </td>
        <td> 
            <p>{{data->pregunta}}</p>
        </td>
        <td>
            <!-- <a href="{{ route('editar', ['placa'=>$data->placa]) }}">Editar</a>
            <br>
            <form action="{{ route('eliminar', ['placa'=>$data->placa]) }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Eliminar" class="btn btn-danger"> -->
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endif
@endsection
@vite(['resources/js/app.js'])