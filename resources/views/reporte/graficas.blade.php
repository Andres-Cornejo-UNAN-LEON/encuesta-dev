@extends('layouts.principal')
@section('content')
    @vite(['resources/js/graficas/grafica.js'])
    <h2><b>GRAFICAS DE PREGUNTAS</b></h2><hr>
    <article id="article_datos" data-datos="{{$preguntas}}" data-respuestas="{{$respuestas}}"></article>
    <div id="resultados"></div>
@endsection