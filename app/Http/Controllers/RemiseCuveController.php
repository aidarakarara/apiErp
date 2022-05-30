<?php

namespace App\Http\Controllers;

use App\Models\RemiseCuve;
use Illuminate\Http\Request;

class RemiseCuveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RemiseCuve::with('reservoir')->get();
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
        
        return RemiseCuve::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RemiseCuve  $remiseCuve
     * @return \Illuminate\Http\Response
     */
    public function show(RemiseCuve $remiseCuve)
    {
        return $remiseCuve;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RemiseCuve  $remiseCuve
     * @return \Illuminate\Http\Response
     */
    public function edit(RemiseCuve $remiseCuve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RemiseCuve  $remiseCuve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RemiseCuve $remiseCuve)
    {
        $remiseCuve->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RemiseCuve  $remiseCuve
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemiseCuve $remiseCuve)
    {
        $remiseCuve->delete();
        return 1;
    }
}
