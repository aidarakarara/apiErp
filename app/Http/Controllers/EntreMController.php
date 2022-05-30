<?php

namespace App\Http\Controllers;

use App\Models\EntreM;
use Illuminate\Http\Request;

class EntreMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EntreM::with('produit')->
        paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return EntreM::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntreM  $entreM
     * @return \Illuminate\Http\Response
     */
    public function show(EntreM $entreM)
    {
        return $entreM;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntreM  $entreM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)

    {
        $entreM=EntreM::find($id);
        $entreM->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntreM  $entreM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreM=EntreM::find($id);
        $entreM->delete();
        return 1;
    }
}
