<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
 
     */
    public function index()
    {
        $listclientes = Cliente::all();
        return view('clientes.listclientes', compact("listclientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('clientes.registercliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->contacto = $request->input('contacto');
        $cliente->email = $request->input('email');

        $cliente->save();

        return redirect()->route("list.clientes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.editcliente', compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->input('nombre');
        $cliente->direccion = $request->input('direccion');
        $cliente->contacto = $request->input('contacto');
        $cliente->email = $request->input('email');
        $cliente->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $cliente->save();
        return redirect()->route("list.clientes");
    }

    /**
     * Remove the specified resource from storage.
     *

     */


     public function remove($id)
     {
         $cliente = Cliente::find($id);
         return view('clientes.deletecliente', compact("cliente"));
         
     }


    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route("list.clientes");
    }
}
