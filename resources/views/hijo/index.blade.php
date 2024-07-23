{{-- 10-   VISTA hijo/INDEX --}}

<a href="{{url('hijo/create')}}" class="btn btn-primary"> <h3> Registrar Nuevo hijo  </h3> </a>
<br>
<br>

<h1>   LISTADO DE HIJOS AGREGADOS   </h1>

<table class="table table-light">
    <thead class="thead-light">{{-- Cabezera de la consulta --}}
        <tr>
            <th>ID</th>
            <th>IDENTIFICACION</th>
            <th>NOMBRE</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($hijo as $hijo)
            
        <tr>
            <td>{{$hijo-> id }}</td>
            <td>{{$hijo-> codigohijo }}</td>
            <td>{{$hijo-> nombrehijo}}</td>
            <td>{{$hijo-> fechahijo}}</td>
    

            <td>
                {{-- 22- Crear boton Editar: <hijo/id/edit</edit> --}}
                <a href="{{url('/hijo/'.$hijo->id.'/edit')}}">
                Editar 
                </a>

                {{-- 19- ACCION ELIMINAR --}}
                <form action="{{url('/hijo/'.$hijo->id)}}"  method="post" >  {{-- Envio los datos para ser borrados  --}}
                    @csrf
                    {{method_field('DELETE')}} 
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>

                {{-- Mostrar hijo --}}
                <a href="{{url('/hijo/'.$hijo->id.'/show')}}">
                Mostrar 
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 

