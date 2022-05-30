<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Caisse;
use Illuminate\Http\Request;

class PompisteController extends Controller
{
    private $POMPISTE_ROLE = 1;

    public function index()
    {
        return User::where('role_id', $this->POMPISTE_ROLE)->get();
    }

    public function detailPompiste($id, $annee, $mois)
    {
        $user = User::find($id);
        /*   $annee = '2021';
        $mois = "10"; */
        $madate = Carbon::createFromDate($annee, $mois);
        $start = Carbon::parse($madate)->startOfMonth();
        $end = Carbon::parse($madate)->endOfMonth();

        /**recuperation des jour du mois  */
        $dates = [];

        while ($start->lte($end)) {
            $dates[] = $start->copy();
            $start->addDay();
        }

        $day = null;
        $nbCaisseMois = 0;
        foreach ($dates as $key => $value) {
            $totalGaz = 0;
            $totalSup = 0;
            $total = 0;

            $jour = Carbon::parse($value)->format('d');
            $caisses = Caisse::select('id', 'coffre', 'user_id', 'netVer', 'approuve', 'date_caisse', 'ecart')
                ->where('user_id',  $user->id)
                ->whereYear('date_caisse', $annee)
                ->whereMonth('date_caisse', $mois)
                ->whereDay('date_caisse', $jour)
                ->get();


            foreach ($caisses as  $caisse) {
                $nbCaisseMois += 1;
                foreach ($caisses as  $caisse) {
                    foreach ($caisse->compteurs as $compteur) {

                        if ($compteur->pistolet) {
                            $sortie = $compteur->indexFerE - $compteur->indexOuvE;
                            $total +=  $sortie * $compteur->prix;
                        }
                    }
                    // $total += $caisse->coffre + $caisse->netVer + $caisse->ecart;
                    foreach ($caisse->venteTpes as $ventes) {
                        $total += $ventes->montant;
                    }
                    foreach ($caisse->depenses as $depense) {
                        $total += $depense->montant;
                    }
                    foreach ($caisse->bonClients as $bonClient) {
                        $total += $bonClient->montant;
                    }
                }

                foreach ($caisse->compteurs as $compteur) {

                    if ($compteur->pistolet->carburant == "gasoil") {
                        $sortie = $compteur->indexFerE - $compteur->indexOuvE;
                        $totalGaz +=  $sortie;
                    }
                    if ($compteur->pistolet->carburant == "super") {
                        $sortie = $compteur->indexFerE - $compteur->indexOuvE;
                        $totalSup +=  $sortie;
                    }
                }
                //if($caisse->pompe->pistolets)


                $day[] = ['date' => "$jour/$mois/$annee ", 'gasoil' => $totalGaz, 'super' => $totalSup, 'venteTotal' => $total];
            }
        }

        return [
            'user' => $user,
            'details' => $day ? $day : [],
            'nbCaisse' => $nbCaisseMois
        ];
    }
}
