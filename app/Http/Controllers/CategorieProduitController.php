<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategorieProduitController extends Controller
{
   
   
    public function index(Categorie $categorie)
    {
        return $categorie->produits()->get();
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request ,Categorie $categorie)
    {
        return Produit::create([
            'nom'=>$request->nom,
            'pu'=>$request->pu,
            'qte_reel'=>$request->qte_reel,
            'qte_theorique'=>$request->qte_theorique,
            'categorie_id'=>$categorie->id
        ]);

    }

    
    public function show(Categorie $categorie ,Produit $produit)
    {
        return $produit;
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, Categorie $categorie,Produit $produit)
    {
         $produit->update([
            'nom'=>$request->nom,
            'pu'=>$request->pu,
            'qte_reel'=>$request->qte_reel,
            'qte_theorique'=>$request->qte_theorique,
            'categorie_id'=>$categorie->id
        ]);
        return 1;
    }

    
    public function destroy(Categorie $categorie,Produit $produit)
    {
        $produit->delete();
        return 1;
    }
}
