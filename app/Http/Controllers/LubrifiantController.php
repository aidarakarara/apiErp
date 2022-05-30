<?php

namespace App\Http\Controllers;

use App\Models\Lubrifiant;
use App\Models\Tablub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LubrifiantController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lubrifiant::all();
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
        $lubrifiant=Lubrifiant::create($request->all());
        return $lubrifiant;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lubrifiant $lubrifiant)
    {
        return $lubrifiant;
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
    public function update(Request $request, Lubrifiant $lubrifiant)
    {
        return $lubrifiant->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lubrifiant $lubrifiant)
    {
        $lubrifiant->delete();
        return 1;
    } 

    public function lubrifiant_date($date)
    {               
        return Lubrifiant::where("date_lubrifiant",$date)->get();

        
    }
}