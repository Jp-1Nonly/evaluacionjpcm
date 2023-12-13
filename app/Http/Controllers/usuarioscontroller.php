<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listusuarios = Usuario::select('usuarios.id','usuarios.nombre as usuarios_name','usuarios.apellidos','usuarios.correo','usuarios.contacto', 'usuarios.direccion', 'roles.nombre as roles_nombre' )
        ->join('roles','usuarios.rol','=','roles.id')->get();
        // dd($products);();
        return view("usuarios.listusuarios",compact("listusuarios"));
    }

    /**
     */
    public function create()
    {
        $roles = Role::all();
        return view('usuarios.registerusuario', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->contacto = $request->input('contacto');
        $usuario->direccion = $request->input('direccion');
        $usuario->rol = $request->input('rol');
   
        

        $usuario->save();

        return redirect()->route("list.usuarios");
    }

    /**
     * Display the specified resource.

     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.editusuario', compact("usuario"));
    }

    /**
     */
    public function edit($id)
    {
        $roles = Role::all();
        $usuario = Usuario::find($id);
        return view('usuarios.editusuario', compact("usuario","roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->contacto = $request->input('contacto');
        $usuario->direccion = $request->input('direccion');
        $usuario->rol = $request->input('rol');
        $usuario->updated_at = Carbon::now()->setTimezone('America/Bogota');
        


        $usuario->save();
        return redirect()->route("list.usuarios");
    }

    /**
     * Remove the specified resource from storage.
     */

     public function remove($id)
     {
         $usuario = Usuario::find($id);
         return view('usuarios.deleteusuario', compact("usuario"));
         
     }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route("list.usuarios");
    }
}
