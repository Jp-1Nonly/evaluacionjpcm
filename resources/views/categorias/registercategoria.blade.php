@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Agrega una nueva categoria</h3>

    <form method="POST" action="{{route('new.categoria')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input name="descripcion" type="descripcion" class="form-control">
        </div>

        <button type="submit" class="btn btn-dark">Registrar nueva categoria</button>
      </form>

</div>
    
@endsection