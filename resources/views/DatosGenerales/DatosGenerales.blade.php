<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Generales</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="cuerpo-generales">

@vite(['resources/js/jquery/jquery-3.6.1.min.js','resources/js/datosGenerales/datosGenerales.js'])
<div class="_container">
    <h1>Ingresar Datos Generales</h1>
    <div class="form-datosGenerales">
        <form action="{{ route('DatosGenerales.create') }}" method="POST" class="formulario">@csrf
            <div class="form-control">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" placeholder="Cedula" required>
            </div>
            <div class="form-control">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-control">
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" placeholder="Apellidos" required>
            </div>
            <div class="form-control">
                <label for="IdSexo">Sexo</label>
                <select name="IdSexo" id="IdSexo">
                    <option value="">----Seleccionar----</option>
                    @foreach($sexo as $key => $value)
                    <option value="{{$value->id}}">{{$value->genero}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label for="IdDepartamento">Departamento</label>
                <select name="IdDepartamento" id="IdDepartamento" required>
                <option value="">----Seleccionar----</option>
                    @foreach($departamento as $key => $value)
                    <option value="{{$value->id}}">{{$value->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-control">
                <label for="IdMunicipio">Municipio</label>
                <select name="IdMunicipio" id="IdMunicipio" required>

                </select>
            </div>
            <div class="botones">
                <input type="submit" value="Siguiente" name="siguiente" class="boton-siguiente">
            </div>
        </form>
    </div> 
</div>

@vite(['resources/js/app.js'])

</body>
</html>