@extends('layouts.limpio')

@section('content')
<div class="card" id="caja-login">
    <span id="encabezado-sesion"><h3>REGISTRAR</h3></span>
    <span id="sub-encabezado-sesion"><h4><small>Ingrese sus datos para poder<br>registrarse en la app encuesta</small></h4></span>
    <div class="row">
        <form method="POST" action="{{ route('register') }}" id="formulario-login">@csrf
            <div class="row">
                <input id="input-email" type="text" name="name" class="ingreso-datos" placeholder="nombre completo" required autocomplete="name" autofocus>
            </div>
            <div class="row">
                <input id="input-email" type="email" name="email" class="ingreso-datos" placeholder="email.example@gmail.com" required autocomplete="email">
            </div>
            <div class="row">
                <select class="form-select ingreso-datos" name="admin">
                    <option>Seleccionar rol</option>
                    <option value=1>Administrador</option>
                    <option value=0>Invitado</option>
                </select>
            </div>
            <div class="row">
                <input type="password" id="input-contra" class="ingreso-datos" placeholder="password" name="password" required autocomplete="new-password">
            </div>
            <div class="row">
                <input type="password" id="input-new-contra" class="ingreso-datos" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="row">
                <span><input type="checkbox" name="mostrar-password" id="check-contra"><label for="check-contra">Mostrar contraseña</label></span>
            </div>
            <div class="row">
                <button id="button-ingresar" type="submit">Ingresar</button>
            </div>
        </form>
    </div>
</div>
<div class="clear-fix"></div>
@endsection
