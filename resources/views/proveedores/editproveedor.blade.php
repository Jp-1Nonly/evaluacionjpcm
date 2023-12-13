@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar proveedor</h3>

    <form method="POST" action="{{route('update.proveedor',$proveedor->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  value="{{$proveedor->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input value="{{$proveedor->direccion}}" name="direccion" type="descripcion" class="form-control">
        </div>

        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input value="{{$proveedor->contacto}}" name="contacto" type="precio" class="form-control">
        </div>


        <div class="mb-3">
          <label for="correo" class="form-label">correo</label>
          <input value="{{$proveedor->correo}}" name="correo" type="email" class="form-control">
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection