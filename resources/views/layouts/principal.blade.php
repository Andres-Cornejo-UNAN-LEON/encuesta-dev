<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body  style="width: 1685px; background-color: #E5EAFA;">
    <div class="caja-main" id="barra-lateral">
        <span id="datos-generales">
            <img src="https://image.shutterstock.com/image-vector/thin-line-user-icon-on-260nw-519039097.jpg" alt="user">
            <h3>{{ Auth::user()->name }}</h3>
            <h4><small class="text-muted">{{ Auth::user()->email}}</small></h4>
            <form action="{{ route('logout') }}" method="POST">@csrf
                <button id="logout">Cerrar sesion</button>
            </form>
        </span>
        <form action="" method="post">@csrf
            <input type="text" placeholder="Buscar una pregunta" name="search_question" id="search-question">
        </form>
        @if (Auth::user()->admin)
            <div class="row">
                <a href="#">Preguntas</a>
            </div>
        @endif
        <div class="row">
            <a href="#">Reporte de encuesta</a>
        </div>
        
    </div>
    <div class="caja-main" id="contenido-app-main">
        @yield('content')
    </div>
</body>
</html>
