@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Agrega un nuevo proveedor</h3>

    <form method="POST" action="{{route('new.usuario')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Apellidos</label>
          <input name="apellidos" type="apellidos" class="form-control">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">correo</label>
          <input name="correo" type="correo" class="form-control">
        </div>

        <div class="mb-3">
          <label for="contacto" class="form-label">Contacto</label>
          <input name="contacto" type="contacto" class="form-control">
      </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input name="direccion" type="direccion" class="form-control">
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Rol</label>
          <select name="rol" id="">
            @foreach ($roles as $value)

            <option value="{{$value->id}}">{{$value->nombre}}</option>
                
            @endforeach

          </select>
        </div>
   
        <button type="submit" class="btn btn-dark">Registrar nuevo usuario</button>
      </form>

</div>
    
@endsection