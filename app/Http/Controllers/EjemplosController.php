<?php

namespace App\Http\Controllers;

use App\Models\Ejemplo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjemplosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ejemplos=DB::table('ejemplos')->get();
        return view("projects/index",['proyectos'=>$ejemplos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    Ejemplo::create($request->only(['titulo', 'descripcion']));
    return redirect('project/')
        ->with('success','Proyecto creado satisfactoriamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function show(Ejemplos $ejemplos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ejemplo = Ejemplo::findOrFail($id); // Buscar el proyecto por ID o lanzar 404 si no existe
        return view("projects.update", compact("ejemplo")); // Ahora sí pasas la variable correctamente
    }       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplo $ejemplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejemplos $ejemplo)
    {
        //
    }
}