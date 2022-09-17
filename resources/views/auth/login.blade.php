@extends('layouts.limpio')

@section('content')
<div class="card" id="caja-login">
    <span id="encabezado-sesion"><h3>INICIO DE SESION</h3></span>
    <span id="sub-encabezado-sesion"><h4><small>Ingrese sus datos para poder <br> ingresar a los datos de la encuesta</small></h4></span>
    <div class="row">
        <form method="POST" action="{{ route('login') }}" id="formulario-login">@csrf
            <div class="row">
                <input id="input-email" type="email" name="email" class="ingreso-datos" placeholder="email.example@gmail.com" required autocomplete="email" autofocus>
            </div>
            <div class="row">
                <input type="password" id="input-contra" class="ingreso-datos" placeholder="Password" name="password" required autocomplete="current-password">
            </div>
            <div class="row">
                <span><input type="checkbox" name="mostrar-password" id="check-contra"><label for="check-contra">Mostrar contraseña</label></span>
            </div>
            <div class="row">
                <span><input type="checkbox" name="recordar-password" id="recordar-contra"><label for="recordar-contra" name="remember" {{ old('remember') ? 'checked' : '' }}>Recuerdame</label></span>
            </div>
            <div class="row">
                <button id="button-ingresar">Ingresar</button>
            </div>
        </form>
    </div>
    <a href="/register" type="button" id="button-registrarse">Registrarse</a>
</div>
<div class="clear-fix"></div>

@endsection
