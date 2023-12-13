@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar rol</h3>

    <form method="POST" action="{{route('update.rol',$rol->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  value="{{$rol->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection