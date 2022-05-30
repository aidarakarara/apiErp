<?php

namespace App\Http\Controllers;

use App\Models\SortieM;
use Illuminate\Http\Request;

class SortieMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SortieM::with('produit')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return SortieM::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SortieM  $sortieM
     * @return \Illuminate\Http\Response
     */
    public function show(SortieM $sortieM)
    {
        return $sortieM;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SortieM  $sortieM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sortieM=SortieM::find($id);
        $sortieM->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SortieM  $sortieM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sortieM=SortieM::find($id);
        $sortieM->delete();
        return 1;
    }
}
