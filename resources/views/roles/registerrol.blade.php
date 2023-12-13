@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Agrega una nuevo rol</h3>

    <form method="POST" action="{{route('new.rol')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre Rol</label>
          <input name="nombre" type="nombre" class="form-control">
        </div>

        <button type="submit" class="btn btn-dark">Registrar nueva rol</button>
      </form>

</div>
    
@endsection