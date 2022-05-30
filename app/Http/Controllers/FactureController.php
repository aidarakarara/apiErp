<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Synthese;
use PDF;
use App\Models\Encaissement;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function facture(Request $request, $id)
    {

        if ($request->has('telecharger')) {


            $mois = $request->query('mois');
            $jour = $request->query('jour');
            $annee = $request->query('annee');

            $date = Carbon::createFromDate($annee, $mois, $jour);
            $synthese = Synthese::whereDate('date', '=', $date)->first();

            $client_id = $id;
            $today = Carbon::now();
            $client = Client::find($client_id);
            $encaissements = Encaissement::where('client_id', $client_id)
                ->where('synthese_id', $synthese->id)
                ->with('bon')->get();
            // dd($encaissements);
            $total = 0;
            //dd($encaissements);
            foreach ($encaissements as $encaisse) {
                $total += $encaisse->bon ? $encaisse->bon->montant : 0;
            }
            $pdf = PDF::loadView('facture', compact('encaissements', 'client', 'today', 'total', 'mois', 'annee'))->setOptions(['defaultFont' => 'sans-serif']);
            return  $pdf->stream('Stream');
        }
    }
}
