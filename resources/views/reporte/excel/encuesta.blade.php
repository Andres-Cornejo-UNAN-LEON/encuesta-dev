<table>
    <thead>
        <tr>
            <th>N° Encuesta</th>
            <th>Nombre del encuestado</th>
            <th>Cedula</th>
            <th>Pregunta</th>
            <th>Respuesta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->encuestado->generales->nombre}} {{$dato->encuestado->generales->apellido}}</td>
                <td>{{$dato->encuestado->generales->cedula}}</td>
                <td>{{$dato->pregunta->pregunta}}</td>
                <td>{{$dato->Respuesta}}</td>
            </tr>
        @endforeach
    </tbody>
</table>