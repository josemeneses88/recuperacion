{{--  7-  CREAR FORMULARIO --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Vista Asociar:</h1>

    <form action="{{route('empleadohabilidad.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <br>
        <h1>empleado:</h1>
        <select name="empleado_id">
            @foreach($empleados as $empleado)
                <option value="{{ $empleado->id }}">{{ $empleado->id }} - {{ $empleado->NIFempleado}}</option>
            @endforeach
        </select>
        <br>
        <h1>habilidad:</h1>    
        <select name="habilidad_id">
            @foreach($habilidads as $habilidad) {{--  plural luego -> singular  --}}
                <option value="{{ $habilidad->id }}">{{ $habilidad->id }} - {{ $habilidad->nombrehabilidad }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>