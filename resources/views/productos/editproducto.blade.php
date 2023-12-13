@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Editar producto</h3>

    <form method="POST" action="{{route('update.producto',$producto->id)}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input  value="{{$producto->nombre}}" name="nombre" type="nombre" class="form-control">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input value="{{$producto->descripcion}}" name="descripcion" type="descripcion" class="form-control">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input value="{{$producto->precio}}" name="precio" type="precio" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-label" name="categoria" id="categoria">
                @foreach ($categoria as $value)

                <option value="{{$value->id}}">{{$value->nombre}}</option>
                    
                @endforeach
            </select>
        </div>
   
        <button type="submit" class="btn btn-dark">Guardar cambios</button>
      </form>

</div>
    
@endsection