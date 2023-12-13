@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Agrega un nuevo cliente</h3>

    <form method="POST" action="{{route('new.cliente')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="direccion" class="form-label">Direccion</label>
          <input name="direccion" type="direccion" class="form-control">
        </div>

        <div class="mb-3">
            <label for="contacto" class="form-label">Contacto</label>
            <input name="contacto" type="contacto" class="form-control">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control">
        </div>

   
        <button type="submit" class="btn btn-dark">Registrar nuevo cliente</button>
      </form>

</div>
    
@endsection