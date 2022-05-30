<?php

namespace App\Http\Controllers;

use App\Models\BonClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BonClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BonClient::all();
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
       /*  if (!Gate::allows('pompiste')) {
            abort(403);
        } */
        return BonClient::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BonClient  $bonClient
     * @return \Illuminate\Http\Response
     */
    public function show(BonClient $bonClient)
    {
        return $bonClient;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BonClient  $bonClient
     * @return \Illuminate\Http\Response
     */
    public function edit(BonClient $bonClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BonClient  $bonClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BonClient $bonClient)
    {
       /*  if ($bonClient->caisse->approuve) {
            abort(403);
        }
        if (!Gate::allows('pompiste')) {
            abort(403);
        } */
        $bonClient->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BonClient  $bonClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonClient $bonClient)
    {
        if ($bonClient->caisse->approuve) {
            abort(403);
        }
        $bonClient->delete();
        return 1;
    }
}
