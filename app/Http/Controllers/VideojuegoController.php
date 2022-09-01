<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    /**g
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerTodos()
    {
    
        $videojuego =  Videojuego::all();
        
        
        return $videojuego;
        
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
        //intancer la clase videojuego
        $videojuego = new Videojuego;


        $videojuego->nombre = $request->input('nombre');
        $videojuego->fecha_publicacion = $request->input('fecha_publicacion');
        $videojuego->id_categorias = $request->input('categorias');
        $videojuego->id_desarrolladoras = $request->input('desarrolladoras');
        $videojuego->puntuacion = $request->input('puntuacion');
        $videojuego->estado = $request->input('estado');

        var_dump($request->input('categorias'));
        $videojuego->save();

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

        return Videojuego::FindOrFail($id)->get();
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        
        $vjuegos = Videojuego::find($id);
 
        $vjuegos->nombre = $request->input('nombre');
        $vjuegos->fecha_publicacion =  $request->input('fecha_publicacion');
        $vjuegos->id_categorias =  $request->input('genero');
        $vjuegos->id_desarrolladoras =  $request->input('desarrolladora');
        $vjuegos->puntuacion =  $request->input('puntuacion');
        $vjuegos->estado =  $request->input('estado');
        $vjuegos->save();

    //
    }


    public function buscarNombre(Request $request)
    {

        $nombre = $request->input('nombre');
        
        
        $videojuego = Videojuego::where('nombre' , $nombre)
        ->orderBy('nombre')
        ->take(3)
        ->get();

        return $videojuego;

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $id = $request->input('id');

        $videojuego = Videojuego::find($id);


        $videojuego->delete();
         



        //
    }
}
