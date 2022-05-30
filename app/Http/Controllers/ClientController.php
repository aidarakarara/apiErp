<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Synthese;
use App\Models\BonClient;
use App\Models\Encaissement;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::paginate(26);
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
        return Client::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client = $client->load('encaissements', 'bonClients');
        return $client;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return 1;
    }

    public function non_encaisse()
    {
        $data = [];
        $clients = Client::whereHas('bonClients')
            ->get();
        foreach ($clients as $client) {
            $nbon = 0;
            $montbon = 0;
            if ($client->bonClients) {
                foreach ($client->bonClients as $key => $bon) {
                    if ($bon->encaissement_id == null) {

                        $nbon += 1;
                        $montbon += $bon->montant;
                    }
                }
            }
            $client->bon_clients_count = $nbon;
            $client->bon_clients_sum_montant = $montbon;
            if ($client->bon_clients_count > 0) {
                $data[] = $client;
            }
        }

        return $data;
    }
    /**
     * return list clients where Bonclient encaissement_id not null
     * based by date comming in request query
     */
    public function encaisse(Request $request)
    {
        $data = [];
        $mois = $request->query('mois');
        $jour = $request->query('jour');
        $annee = $request->query('annee');
        $date = Carbon::createFromDate($annee, $mois, $jour);
        $synthese = Synthese::whereDate('date', '=', $date)->first();
        $clients = Client::whereHas('encaissements', function ($q) use ($synthese) {
            $q->where('synthese_id', $synthese->id);
        })->get();


        foreach ($clients as $client) {
            $nbon = 0;
            $montbon = 0;
            if ($client->bonClients) {
                foreach ($client->bonClients as $bon) {
                    if ($bon->encaissement) {
                        if ($bon->encaissement->synthese_id == $synthese->id) {
                            $nbon += 1;
                            $montbon += $bon->montant;
                        }
                    }
                }
            }
            $client->bonclients_count = $nbon;
            $client->bonclients_montant = $montbon;
        }
        //$clients->bon_clients = null;
        return $clients;
    }
    /**
     * CLIENT BONS 
     */
    public function bonclients(Request $request, $id)
    {
        return BonClient::where('client_id', $id)
            ->where('etat', 0)
            ->where('encaissement_id', null)
            /* ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', $request->query('mois'))
            ->whereDay('created_at', $request->query('jour')) */
            ->get();
    }
    /**
     * CLIENT ENCAISSEMENT 
     */
    public function encaissements(Request $request, $id)
    {
        $mois = $request->query('mois');
        $jour = $request->query('jour');
        $annee = $request->query('annee');
        $date = Carbon::createFromDate($annee, $mois, $jour);
        $synthese = Synthese::whereDate('date', '=', $date)->first();
        //return $synthese;
        return Encaissement::where('client_id', $id)
            ->where('synthese_id', $synthese->id)
            ->with('bon')
            ->get();

        /*  BonClient::where('client_id', $id)
            ->where('etat', 0)
            ->where('encaissement_id', "<>", null)
            ->whereYear('created_at', $request->query('annee'))
            ->whereMonth('created_at', $request->query('mois'))
            ->whereDay('created_at', $request->query('jour'))
            ->get(); */
    }
}
