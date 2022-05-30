<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablub;
use Illuminate\Support\Facades\Gate;

class TablubController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tablub::/*where('user_id', '=', auth()->user()->id)
        -> */orderBy('created_at', 'DESC') -> get();
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
       $tablub=Tablub::create($request->all());
        return $tablub;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tablub $tablub)
    {
        return $tablub->pistolets()->get();
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
    public function update(Request $request, Tablub $tablub)
    {
        return $tablub->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tablub $tablub)
    {
       $tablub->delete();
       return 1;
    }

    public function approuver_fiche($id)
    {
        if (!Gate::allows('chefpiste')) {
            abort(403);
        }
        $tablub = Tablub::find($id);
        $tablub->update(['approuve' => $tablub->approuve ? false : true]);
        return $tablub;
    }

   
}


