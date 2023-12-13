@extends('layout.app')

@section('contenidogeneral')

<div>
    <a class="btn btn-dark" href="{{route('create.usuario')}}">Agregar nuevo usuario</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">CORREO</th>
            <th scope="col">CONTACTO</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">ROL</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($listusuarios as $value)
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['usuarios_name']}}</td>
                    <td>{{$value['apellidos']}}</td>
                    <td>{{$value['correo']}}</td>
                    <td>{{$value['contacto']}}</td>
                    <td>{{$value['direccion']}}</td>
                    <td>{{$value['roles_nombre']}}<td>
                        <a class="btn btn-dark" href="{{route('edit.usuario',$value->id)}}">Editar</a>
                        <a class="btn btn-danger" href="{{route('remove.usuario',$value->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach    
        </tbody>
      </table>
      <a class="btn btn-dark" href="{{route('index')}}">Ir al inicio</a> 
</div>
    
@endsection