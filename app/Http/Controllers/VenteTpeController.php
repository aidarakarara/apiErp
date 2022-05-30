<?php

namespace App\Http\Controllers;

use App\Models\VenteTpe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VenteTpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VenteTpe::all();
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
        return VenteTpe::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VenteTpe  $venteTpe
     * @return \Illuminate\Http\Response
     */
    public function show(VenteTpe $venteTpe)
    {
        return $venteTpe;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VenteTpe  $venteTpe
     * @return \Illuminate\Http\Response
     */
    public function edit(VenteTpe $venteTpe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VenteTpe  $venteTpe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VenteTpe $venteTpe)
    {
       
        if ($venteTpe->caisse->approuve) {
            abort(403);
        }
        if (!Gate::allows('pompiste')) {
            abort(403);
        }
        $venteTpe->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VenteTpe  $venteTpe
     * @return \Illuminate\Http\Response
     */
    public function destroy(VenteTpe $venteTpe)
    {
        if (!Gate::allows('pompiste')) {
            abort(403);
        }
        if ($venteTpe->caisse->approuve) {
            abort(403);
        }
        $venteTpe->delete();
        return 1;
    }
}
