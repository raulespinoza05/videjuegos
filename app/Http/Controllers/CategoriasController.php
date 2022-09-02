<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerTodos()
    {
        $categorias =  Categorias::all();
        
        return $categorias;
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $categorias = new categorias;
        $categorias->nombre = $request->input('nombre');
        $categorias->estatus = $request->input('estatus');

        $categorias->save();
        


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Categorias::FindOrFail($id)->get();
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $categorias = Categorias::find($id);
        $categorias->nombre = $request->input('nombre');
        $categorias->estatus = $request->input('estatus');

        $categorias->save();

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function buscarNombre(Request $request)

      { 
        $nombre = $request->input('nombre');
        
        
        $categorias = Categorias::where('nombre' , $nombre)
        ->orderBy('nombre')
        ->take(3)
        ->get();

        return $categorias;



      }


    public function destroy(Request $request)
    {

        $id = $request->input('id');

        $categorias = Categorias::find($id);
        $categorias->delete();

        //
    }
}
