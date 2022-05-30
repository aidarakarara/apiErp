<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabacc;
use Illuminate\Support\Facades\Gate;

class TabaccController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tabacc::orderBy('created_at','DESC')->get();
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
       $tabacc=Tabacc::create($request->all());
        return $tabacc;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tabacc $tabacc)
    {
        return $tabacc->pistolets()->get();
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
    public function update(Request $request, Tabacc $tabacc)
    {
        return $tabacc->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabacc $tabacc)
    {
       $tabacc->delete();
       return 1;
    }

    public function approuver_ficheA($id)
    {
        if (!Gate::allows('chefpiste')) {
            abort(403);
        }
        $tabacc = Tabacc::find($id);
        $tabacc->update(['approuve' => $tabacc->approuve ? false : true]);
        return $tabacc;
    }
}
