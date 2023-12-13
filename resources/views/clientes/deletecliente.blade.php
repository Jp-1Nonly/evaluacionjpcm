@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar el cliente?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$cliente->nombre}}</li>
          <li class="list-group-item">Direccion: {{$cliente->direccion}}</li>
          <li class="list-group-item">Contacto: {{$cliente->contacto}}</li>
          <li class="list-group-item">Email: {{$cliente->email}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.cliente',$cliente->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar cliente</button>
    </form>

</div>
    
@endsection