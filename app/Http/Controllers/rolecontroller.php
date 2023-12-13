<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class rolecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listroles = Role::all();
        return view('roles.listroles', compact("listroles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('roles.registerrol');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rol = new Role();

        $rol->nombre = $request->input('nombre');

        $rol->save();

        return redirect()->route("list.roles");
    }

    /**
     * Display the specified resource.
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
        $rol = Role::find($id);
        return view('roles.editrol', compact("rol"));
    }

    /**
     * Update the specified resource in storage.

     */
    public function update(Request $request, $id)
    {
        $rol = Role::find($id);
        $rol->nombre = $request->input('nombre');
        $rol->updated_at = Carbon::now()->setTimezone('America/Bogota');

        $rol->save();

        return redirect()->route("list.roles");
    }

    /**
     * Remove the specified resource from storage.
     */


    public function remove($id)
    {
        $rol = Role::find($id);
        return view('roles.deleterol', compact("rol"));
         
    }

    public function destroy($id)
    {
        $rol = Role::find($id);
        $rol->delete();
        return redirect()->route("list.roles");
    }
}
