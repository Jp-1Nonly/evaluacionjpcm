@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar el usuario?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$usuario->nombre}}</li>
          <li class="list-group-item">Contacto: {{$usuario->contacto}}</li>
          <li class="list-group-item">correo: {{$usuario->correo}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.usuario',$usuario->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar Usuario</button>
    </form>

</div>
    
@endsection