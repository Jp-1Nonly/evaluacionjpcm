@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar proveedor</h3>

    <form method="POST" action="{{route('update.usuario',$usuario->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input value="{{$usuario->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Apellidos</label>
          <input value="{{$usuario->apellidos}}" name="apellidos" type="apellidos" class="form-control">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">correo</label>
          <input value="{{$usuario->correo}}" name="correo" type="correo" class="form-control">
        </div>

        <div class="mb-3">
          <label for="contacto" class="form-label">Contacto</label>
          <input value="{{$usuario->contacto}}" name="contacto" type="contacto" class="form-control">
      </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input value="{{$usuario->direccion}}" name="direccion" type="direccion" class="form-control">
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Rol</label>
          <select name="rol" id="">
            @foreach ($roles as $value)

            <option value="{{$value->id}}">{{$value->nombre}}</option>
                
            @endforeach

          </select>
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection