@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Agrega un nuevo producto</h3>

    <form method="POST" action="{{route('new.producto')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control">
        </div>

        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input name="descripcion" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input name="precio" type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-label" name="categoria" id="categoria">
                @foreach ($categoria as $value)

                <option value="{{$value->id}}">{{$value->nombre}}</option>
                    
                @endforeach
            </select>
        </div>
   
        <button type="submit" class="btn btn-dark">Registrar nuevo producto</button>
      </form>

</div>
    
@endsection