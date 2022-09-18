@extends('layouts.principal')

@section('content')
<div class="container" id="caja-bienvenido">
    <div class="card" id="tarjeta">
        <div class="card-header" id="encabezado-tarjeta"><h1 class="display-5">BIENVENIDO!!!</h1></div>
        <div class="card-body" id="cuerpo-tarjeta">
            <h4>
                <small class="text-muted">
                    <b>Nombre:</b> {{ Auth::user()->name }}<br>
                    <b>Correo:</b> {{ Auth::user()->email }}<br>
                    <b>Rol de la cuenta:</b> @if (Auth::user()->admin)
                        Administrador<br>
                    @else
                        Invitado<br>               
                    @endif
                    <b>Creado el:</b> {{ Auth::user()->created_at }}<br>
                </small>
            </h4>
        </div>
    </div>
</div>
@endsection
