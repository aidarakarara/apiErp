<?php

namespace App\Http\Controllers;

use App\Models\Ilot;
use App\Models\Pistolet;
use App\Models\Pompe;
use App\Models\Reservoir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
    {
       

        return [
            'nbIlot'=>Ilot::count(),
            'nbPompe'=>Pompe::count(),
            'nbPistolet'=>Pistolet::count(),
            'nbCuve'=>Reservoir::count(),
        ];
    }
}
