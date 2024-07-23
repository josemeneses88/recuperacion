
<div class="container">
    <h1>HOLA DESDE MOSTRAR</h1>
    <br>

    <div>
        <p><strong>Codigo:</strong> {{ $hijo->codigohijo }}</p>
        <p><strong>Nombre:</strong> {{ $hijo->nombrehijo }}</p>
        <p><strong>Fecha de Nacimiento:</strong> {{ $hijo->fechahijo }}</p>
    </div>
</div>

<a href="{{url('hijo')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>
