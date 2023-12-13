@extends('layout.app')

@section('contenidogeneral')

<div>
    <a class="btn btn-dark" href="{{route('create.categoria')}}">Agregar nueva categoria</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($listcategorias as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['nombre']}}</td>
                    <td>{{$value['descripcion']}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('edit.categoria',$value->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('remove.categoria',$value->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      <a class="btn btn-dark" href="{{route('index')}}">Ir al inicio</a> 
</div>
    
@endsection