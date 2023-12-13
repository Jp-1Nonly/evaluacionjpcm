@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar categoria</h3>

    <form method="POST" action="{{route('update.categoria',$categoria->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  value="{{$categoria->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Direccion</label>
          <input value="{{$categoria->descripcion}}" name="descripcion" type="descripcion" class="form-control">
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection