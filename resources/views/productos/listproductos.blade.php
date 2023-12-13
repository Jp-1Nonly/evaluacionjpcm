@extends('layout.app')

@section('contenidogeneral')

<div>
    <a class="btn btn-dark" href="{{route('create.producto')}}">Agregar nuevo producto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">PRECIO</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($listproductos as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['productos_name']}}</td>
                    <td>{{$value['descripcion']}}</td>
                    <td>{{$value['precio']}}</td>
                    <td>{{$value['categorias_nombre']}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('edit.producto',$value->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('remove.producto',$value->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      <a class="btn btn-dark" href="{{route('index')}}">Ir al inicio</a> 
</div>
    
@endsection