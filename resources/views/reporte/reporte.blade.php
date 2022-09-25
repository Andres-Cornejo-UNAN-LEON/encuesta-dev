@extends('layouts.principal')

@section('content')
    <h2><b>REPORTE DE ENCUESTA</b></h2><hr>
    <div class="tarjeta_informe" style="margin-left: 2.5%">
        <div class="row"><h4><small class="text-muted">Datos de los encuestados</small></h4><a href="" class="btn button_export" type="button">Exportar en Excel</a></div>
    </div>
    <div class="tarjeta_informe">
        <div class="row"><h4><small class="text-muted">Datos de las encuestas</small></h4><a href="" class="btn button_export" type="button">Exportar en Excel</a></div>
    </div>
    <div class="tarjeta_informe">
        <div class="row"><h4><small class="text-muted">Graficas de las preguntas</small></h4><a href="/graficas" class="btn button_export" type="button">Ver graficas</a></div>
    </div>
@endsection