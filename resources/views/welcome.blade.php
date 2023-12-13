@extends('layout.app')

@section('contenidogeneral')

<div>
    <h3>Juan Pablo Cañas Marin</h3>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Productos</h3>
                        <a class="btn btn-dark" href="{{route('list.productos')}}">Listar productos</a>
                        <a class="btn btn-dark" href="{{route('create.producto')}}">Registrar nuevo producto</a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Clientes</h3>
                        <a class="btn btn-dark" href="{{route('list.clientes')}}">Listar clientes</a>
                        <a class="btn btn-dark" href="{{route('create.cliente')}}">Registrar nuevo Cliente</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Categorias</h3>
                        <a class="btn btn-dark" href="{{route('list.categorias')}}">Listar categorias</a>
                        <a class="btn btn-dark" href="{{route('create.categoria')}}">Registrar nueva categoria</a>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Proveedores</h3>
                        <a class="btn btn-dark" href="{{route('list.proveedores')}}">Listar proveedores</a>
                        <a class="btn btn-dark" href="{{route('create.proveedor')}}">Registrar nuevo proveedor</a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Usuarios</h3>
                        <a class="btn btn-dark" href="{{route('list.usuarios')}}">Listar usuarios</a>
                        <a class="btn btn-dark" href="{{route('create.usuario')}}">Registrar nuevo usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    




</div>
    
@endsection