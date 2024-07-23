<br>
@if(count($errors) > 0) 
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
    </ul>
</div>
@endif

<br>
<label for=codigohijo> codigo </label>
<input type="text" name="codigohijo" value="{{isset($hijo->codigohijohijo)?$hijo->codigohijohijo:old('codigohijohijo')}}" id="codigohijohijo">
<br>
<br>
<label for=Nombre> Nombre </label> {{--  en iisset pregunta si existe un valor, si existe que lo mueste  $hijo->nombrehijo : si no, que imprima vacio--}}
<input type="text" name="nombrehijo" value="{{isset($hijo->nombrehijo)?$hijo->nombrehijo:old('nombrehijo')}}" id="nombrehijo">
<br>
<br>
<label for=Nacimiento> Fecha de nacimiento </label>
<input type="text" name="fechahijo" value="{{isset($hijo->fechahijo)?$hijo->fechahijo:old('fechahijo')}}"  id="fechahijo">
<br>
<br>
<input type="submit" Value="Guardar"> {{-- se pone value para eliminar el dato del envio name="Enviar" --}}
<br>

<a href="{{url('hijo')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>

