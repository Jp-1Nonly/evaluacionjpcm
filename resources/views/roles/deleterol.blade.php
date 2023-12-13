@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Esta seguro de eliminar el rol?</h3>


    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: {{$rol->nombre}}</li>
        </ul>

    </div><br>

    <form method="POST" action="{{route('destroy.rol',$rol->id)}}">
        @csrf
        <button class="btn btn-dark" type="submit">Eliminar Rol</button>
    </form>

</div>
    
@endsection