@extends('layout.app')

@section('contenidogeneral')

<div>
    <a class="btn btn-dark" href="{{route('create.rol')}}">Agregar nuevo rol</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>

          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($listroles as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['nombre']}}</td>

                    <td>
                        <a class="btn btn-dark" href="{{route('edit.rol',$value->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('remove.rol',$value->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      <a class="btn btn-dark" href="{{route('index')}}">Ir al inicio</a> 
</div>
    
@endsection