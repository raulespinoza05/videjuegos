<?php

namespace App\Http\Controllers;

use App\Models\Desarrolladoras;
use Illuminate\Http\Request;

class DesarrolladorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerTodos()
    {

        $desarrolladoras = Desarrolladoras::all();

        return $desarrolladoras;
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

        $desarrolladora = new Desarrolladoras();
        $desarrolladora->nombre = $request->input('nombre');
        $desarrolladora->año = $request->input('año');
        $desarrolladora->cantidad_juegos_publicados = $request->input('cantidad_juegos_publicados');

        $desarrolladora->save();


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
        return desarrolladoras::FindOrFail($id)->get();

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
        
        $desarrolladora = Desarrolladoras::find($id);

        $desarrolladora->nombre = $request->input('nombre');
        $desarrolladora->año = $request->input('año');
        $desarrolladora->cantidad_juegos_publicados = $request->input('cantidad_juegos_publicados');
        $desarrolladora-save();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function buscarNombre(request $request)
    {
        $nombre = $request->input('nombre');
        var_dump($request->input('nombre'));
        $desarrolladora = Desarrolladoras::where('nombre',$nombre)
        ->orderBy('nombre')
        ->take(3)
        ->get();

        return $desarrolladora;



    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $desarrolladora = desarrolladoras::find($id);

        $desarrolladora->delete();

        //
    }
}
