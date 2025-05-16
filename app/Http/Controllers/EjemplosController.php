<?php

namespace App\Http\Controllers;

use App\Models\Ejemplos;
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
        //
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
    public function edit(Ejemplos $ejemplos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplos $ejemplos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejemplos  $ejemplos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejemplos $ejemplos)
    {
        //
    }
}