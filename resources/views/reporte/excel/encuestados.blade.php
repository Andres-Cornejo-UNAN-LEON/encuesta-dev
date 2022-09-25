<table>
    <thead>
        <tr>
            <th>N° Registro</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Sexo</th>
            <th>Departamento</th>
            <th>Municipio</th>
            <th>Facultad</th>
            <th>Carrera</th>
            <th>a&ntilde;o</th>
            <th>Tipo de matricula</th>
            <th>Beca</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datos as $dato)
            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->generales->nombre}}</td>
                <td>{{$dato->generales->apellido}}</td>
                <td>{{$dato->generales->cedula}}</td>
                <td>{{$dato->generales->sexo->genero}}</td>
                <td>{{$dato->generales->departamento->nombre}}</td>
                <td>{{$dato->generales->municipio->nombre}}</td>
                <td>{{$dato->facultad->nombre}}</td>
                <td>{{$dato->carrera->nombre}}</td>
                <td>{{$dato->anio}}</td>
                <td>{{$dato->matricula->tipo}}</td>
                <td>{{$dato->becado->Tipobecado}}</td>
            </tr>
        @endforeach
    </tbody>
</table>