<?php

namespace App\Http\Controllers;

use App\Models\Compteur;
use Illuminate\Http\Request;

class CompteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Compreur::all();
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
        return Compteur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function show(Compteur $compteur)
    {
       return $compteur;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Compteur $compteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compteur $compteur)
    {
         $compteur->update($request->all());
         return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compteur  $compteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compteur $compteur)
    {
        $compteur->delete();
        return 1;
    }
}
