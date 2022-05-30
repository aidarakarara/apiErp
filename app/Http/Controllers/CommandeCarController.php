<?php

namespace App\Http\Controllers;

use App\Models\CommandeCar;
use Illuminate\Http\Request;

class CommandeCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CommandeCar::all();
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
       return CommandeCar::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommandeCar  $commandeCar
     * @return \Illuminate\Http\Response
     */
    public function show(CommandeCar $commandeCar)
    {
        return $commandeCar;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommandeCar  $commandeCar
     * @return \Illuminate\Http\Response
     */
    public function edit(CommandeCar $commandeCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommandeCar  $commandeCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommandeCar $commandeCar)
    {
        $commandeCar->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommandeCar  $commandeCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommandeCar $commandeCar)
    {
        $commandeCar->delete();
        return 1;
    }
}
