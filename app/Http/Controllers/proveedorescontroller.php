<?php

namespace App\Http\Controllers;


use App\Models\Proveedore;
use Carbon\Carbon;
use Illuminate\Http\Request;

class proveedorescontroller extends Controller
{
    /**
     * Display a listing of the resource.

     */
    public function index()
    {
        $listproveedores = Proveedore::all();
        return view('proveedores.listproveedores', compact("listproveedores"));
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        return view('proveedores.registerproveedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedore();

        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->contacto = $request->input('contacto');
        $proveedor->correo = $request->input('correo');

        $proveedor->save();

        return redirect()->route("list.proveedores");
    }

    /**
     * Display the specified resource.
     *

     */
    public function show($id)
    {
        $proveedor = Proveedore::find($id);
        return view('proveedores.editproveedor', compact("proveedor"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedore::find($id);
        return view('proveedores.editproveedor', compact("proveedor"));
    }

    /**

     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedore::find($id);

        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->contacto = $request->input('contacto');
        $proveedor->correo = $request->input('correo');
        $proveedor->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $proveedor->save();
        return redirect()->route("list.proveedores");
    }

    /**
     * Remove the specified resource from storage.

     */


     public function remove($id)
     {
         $proveedor = Proveedore::find($id);
         return view('proveedores.deleteproveedor', compact("proveedor"));
         
     }

    public function destroy($id)
    {
        $proveedor = Proveedore::find($id);
        $proveedor->delete();
        return redirect()->route("list.proveedores");
    }
}

