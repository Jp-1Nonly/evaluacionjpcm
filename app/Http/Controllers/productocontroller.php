<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $listproductos =  Producto::select('productos.id','productos.nombre as productos_name','productos.descripcion','productos.precio','categorias.nombre as categorias_nombre')
        ->join('categorias','productos.categoria','=','categorias.id')->get();
        // dd($products);
        return view('productos.listproductos', compact("listproductos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('productos.registerproducto', compact("categoria"));
    }

    /**

     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');

        $producto->save();

        return redirect()->route("list.productos");
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
     *
     */
    public function edit($id)
    {
        $categoria = Categoria::all();
        $producto = Producto::find($id);
        return view('productos.editproducto', compact("producto","categoria"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $producto->save();

        return redirect()->route("list.productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     
     */

     public function remove($id)
     {
         $producto = Producto::find($id);
         return view('productos.deleteproducto', compact("producto"));
         
     }
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route("list.productos");
    }
}
