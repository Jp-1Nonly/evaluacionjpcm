@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar la categoria?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$categoria->nombre}}</li>
          <li class="list-group-item">Direccion: {{$categoria->descripcion}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.categoria',$categoria->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar categoria</button>
    </form>

</div>
    
@endsection