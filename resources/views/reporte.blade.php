@extends('layouts.principal')
@section('content')
    @vite(['resources/js/graficas/grafica.js'])
    <article id="article_datos" data-datos="{{$preguntas}}" data-respuestas="{{$respuestas}}"></article>
    <div id="resultados"></div>
@endsection