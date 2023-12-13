@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar el proveedor?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$proveedor->nombre}}</li>
          <li class="list-group-item">Direccion: {{$proveedor->direccion}}</li>
          <li class="list-group-item">Contacto: {{$proveedor->contacto}}</li>
          <li class="list-group-item">correo: {{$proveedor->correo}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.proveedor',$proveedor->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar proveedor</button>
    </form>

</div>
    
@endsection