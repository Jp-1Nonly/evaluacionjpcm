<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class categoriacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listcategorias = Categoria::all();
        return view('categorias.listcategorias', compact("listcategorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.registercategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();

        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');

        $categoria->save();

        return redirect()->route("list.categorias");
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
        $categoria = Categoria::find($id);
        return view('categorias.editcategoria', compact("categoria"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $categoria->save();

        return redirect()->route("list.categorias");
    }

    /**
     * Remove the specified resource from storage.
     */

     public function remove($id)
     {
         $categoria = Categoria::find($id);
         return view('categorias.deletecategoria', compact("categoria"));
         
     }


    public function destroy($id)
    {
        $cateforia = Categoria::find($id);
        $cateforia->delete();
        return redirect()->route("list.categorias");
    }
}
