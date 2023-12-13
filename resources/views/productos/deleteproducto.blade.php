@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar el producto?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$producto->nombre}}</li>
          <li class="list-group-item">Descripcion: {{$producto->descripcion}}</li>
          <li class="list-group-item">Precio: {{$producto->precio}}</li>
          <li class="list-group-item">Categoria: {{$producto->categoria}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.producto',$producto->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar producto</button>
    </form>

</div>
    
@endsection