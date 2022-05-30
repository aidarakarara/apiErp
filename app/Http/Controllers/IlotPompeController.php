<?php

namespace App\Http\Controllers;

use App\Models\Ilot;
use App\Models\Pompe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IlotPompeController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ilot $ilot)
    {
        return $ilot->pompes()->get();
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
    public function store(Request $request ,Ilot $ilot)
    {
        return Pompe::create([
            'numero'=>$request->numero,
            'ilot_id'=>$ilot->id
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ilot $ilot ,Pompe $pompe)
    {
        return $pompe;
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
    public function update(Request $request, Ilot $ilot,Pompe $pompe)
    {
         $pompe->update([
            'numero'=>$request->numero,
            'ilot_id'=>$ilot->id
        ]);
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ilot $ilot,Pompe $pompe)
    {
        $pompe->delete();
        return 1;
    }
}
