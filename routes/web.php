<?php

use App\Http\Controllers\categoriacontroller;
use App\Http\Controllers\clientecontroller;
use App\Http\Controllers\productocontroller;
use App\Http\Controllers\proveedorescontroller;
use App\Http\Controllers\rolecontroller;
use App\Http\Controllers\usuarioscontroller;
use Illuminate\Support\Facades\Route;

/*

*/

Route::get('/', function () {
    return view('welcome');
})->name("index");

//productos
Route::get('/productos', [productocontroller::class,'index'])->name("list.productos");

Route::get('producto/create', [productocontroller::class,'create'])->name("create.producto");

Route::post('producto/new', [productocontroller::class,'store'])->name("new.producto");

Route::get('producto/remove/{id}', [productocontroller::class,'remove'])->name("remove.producto");

Route::post('producto/destroy/{id}', [productocontroller::class,'destroy'])->name("destroy.producto");

Route::get('producto/edit/{id}', [productocontroller::class,'edit'])->name("edit.producto");

Route::post('producto/update/{id}', [productocontroller::class,'update'])->name("update.producto");





//clientes

Route::get('/clientes', [clientecontroller::class,'index'])->name("list.clientes");

Route::get('cliente/create', [clientecontroller::class,'create'])->name("create.cliente");

Route::post('cliente/new', [clientecontroller::class,'store'])->name("new.cliente");

Route::get('cliente/remove/{id}', [clientecontroller::class,'remove'])->name("remove.cliente");

Route::post('cliente/destroy/{id}', [clientecontroller::class,'destroy'])->name("destroy.cliente");

Route::get('cliente/edit/{id}', [clientecontroller::class,'edit'])->name("edit.cliente");

Route::post('cliente/update/{id}', [clientecontroller::class,'update'])->name("update.cliente");




//categorias


Route::get('/categorias', [categoriacontroller::class,'index'])->name("list.categorias");

Route::get('categoria/create', [categoriacontroller::class,'create'])->name("create.categoria");

Route::post('categoria/new', [categoriacontroller::class,'store'])->name("new.categoria");

Route::get('categoria/remove/{id}', [categoriacontroller::class,'remove'])->name("remove.categoria");

Route::post('categoria/destroy/{id}', [categoriacontroller::class,'destroy'])->name("destroy.categoria");

Route::get('categoria/edit/{id}', [categoriacontroller::class,'edit'])->name("edit.categoria");

Route::post('categoria/update/{id}', [categoriacontroller::class,'update'])->name("update.categoria");


// proveedores


Route::get('/proveedores', [proveedorescontroller::class,'index'])->name("list.proveedores");

Route::get('proveedor/create', [proveedorescontroller::class,'create'])->name("create.proveedor");

Route::post('proveedor/new', [proveedorescontroller::class,'store'])->name("new.proveedor");

Route::get('proveedor/remove/{id}', [proveedorescontroller::class,'remove'])->name("remove.proveedor");

Route::post('proveedor/destroy/{id}', [proveedorescontroller::class,'destroy'])->name("destroy.proveedor");

Route::get('proveedor/edit/{id}', [proveedorescontroller::class,'edit'])->name("edit.proveedor");

Route::post('proveedor/update/{id}', [proveedorescontroller::class,'update'])->name("update.proveedor");


//usuarios

Route::get('/usuarios', [usuarioscontroller::class,'index'])->name("list.usuarios");

Route::get('usuario/create', [usuarioscontroller::class,'create'])->name("create.usuario");

Route::post('usuario/new', [usuarioscontroller::class,'store'])->name("new.usuario");

Route::get('usuario/remove/{id}', [usuarioscontroller::class,'remove'])->name("remove.usuario");

Route::post('usuario/destroy/{id}', [usuarioscontroller::class,'destroy'])->name("destroy.usuario");

Route::get('usuario/edit/{id}', [usuarioscontroller::class,'edit'])->name("edit.usuario");

Route::post('usuario/update/{id}', [usuarioscontroller::class,'update'])->name("update.usuario");

//Rol

Route::get('/roles', [rolecontroller::class,'index'])->name("list.roles");

Route::get('rol/create', [rolecontroller::class,'create'])->name("create.rol");

Route::post('rol/new', [rolecontroller::class,'store'])->name("new.rol");

Route::get('rol/remove/{id}', [rolecontroller::class,'remove'])->name("remove.rol");

Route::post('rol/destroy/{id}', [rolecontroller::class,'destroy'])->name("destroy.rol");

Route::get('rol/edit/{id}', [rolecontroller::class,'edit'])->name("edit.rol");

Route::post('rol/update/{id}', [rolecontroller::class,'update'])->name("update.rol");