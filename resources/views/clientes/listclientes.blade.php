@extends('layout.app')

@section('contenidogeneral')

<div>
    <a class="btn btn-dark" href="{{route('create.cliente')}}">Agregar nuevo cliente</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">CONTACTO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($listclientes as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['nombre']}}</td>
                    <td>{{$value['direccion']}}</td>
                    <td>{{$value['contacto']}}</td>
                    <td>{{$value['email']}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('edit.cliente',$value->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('remove.cliente',$value->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      <a class="btn btn-dark" href="{{route('index')}}">Ir al inicio</a> 
</div>
    
@endsection