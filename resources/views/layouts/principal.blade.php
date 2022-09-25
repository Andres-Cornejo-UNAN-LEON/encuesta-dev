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

    <!-- Libreria de chart.js para las graficass -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body  style="width: 100%; background-color: #E5EAFA;">
    <div class="caja-main" id="barra-lateral">
        <span id="datos-generales">
            <img src="https://image.shutterstock.com/image-vector/thin-line-user-icon-on-260nw-519039097.jpg" alt="user">
            @if (Auth::check())
                <h3>{{ Auth::user()->name }}</h3>
                <h4><small class="text-muted">{{ Auth::user()->email}}</small></h4>
            @else
                <h3>{{ $nombreCompleto }}</h3>
                <h4><small class="text-muted">{{ $cedula}}</small></h4>
            @endif
            @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST">@csrf
                    <button id="logout">Cerrar sesion</button>
                </form>
            @endif
        </span>
        @if (Auth::check())
            @if (Auth::user()->admin)
                <form action="" method="post">@csrf
                    <input type="text" placeholder="Buscar una pregunta" name="search_question" id="search-question">
                </form>
                <div class="row">
                    <a href="#">Preguntas</a>
                </div>
            @endif
            <div class="row">
                <a href="/reporte">Reporte de encuesta</a>
            </div>
        @endif
    </div>
    <div class="caja-main" id="contenido-app-main">
        @yield('content')
    </div>
</body>
</html>
