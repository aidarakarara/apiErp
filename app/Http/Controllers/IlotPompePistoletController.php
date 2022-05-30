<?php

namespace App\Http\Controllers;

use App\Models\Ilot;
use App\Models\Pompe;
use App\Models\Pistolet;
use Illuminate\Http\Request;

class IlotPompePistoletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ilot $ilot,Pompe $pompe)
    {
       //$pompe->pitolets()->get();
       return $pompe->pistolets()->get();
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
    public function store(Request $request ,Ilot $ilot,Pompe $pompe )
    {
       return Pistolet::create([
        'numero'=>$request->numero,
        'carburant'=>$request->carburant,
        'prix'=>$request->prix,
        'pompe_id'=>$pompe->id,
        'reservoir_id'=>null,
        'compteur_id'=>null
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ilot $ilot,Pompe $pompe, Pistolet $pistolet)
    {
       return $pistolet;
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
    public function update(Request $request, Ilot $ilot,Pompe $pompe, Pistolet $pistolet)
    {
        $res_id=$request->reservoir_id ? $request->reservoir_id : null ;
        $comp_id=$request->compteur_id ? $request->compteur_id : null;
         $pistolet->update([
            'numero'=>$request->numero,
            'carburant'=>$request->carburant,
            'prix'=>$request->prix,
            'pompe_id'=>$pompe->id,
            'reservoir_id'=>$res_id,
            'compteur_id'=>$comp_id
           ]);
           return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ilot $ilot,Pompe $pompe, Pistolet $pistolet)
    {
      $pistolet->delete();
      return 1;
    }
}
