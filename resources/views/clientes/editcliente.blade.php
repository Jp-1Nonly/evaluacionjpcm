@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar cliente</h3>

    <form method="POST" action="{{route('update.cliente',$cliente->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  value="{{$cliente->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input value="{{$cliente->direccion}}" name="direccion" type="descripcion" class="form-control">
        </div>

        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input value="{{$cliente->contacto}}" name="contacto" type="precio" class="form-control">
        </div>


        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input value="{{$cliente->email}}" name="email" type="email" class="form-control">
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection