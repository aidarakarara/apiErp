<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\EntreM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
 
class ProduitController extends Controller
{
   
    
    public function index(Request $request)
    {
        if ($request->has('search')){
            $term=$request->query('search');
            return Produit::where('nom', 'LIKE', "%$term%")
            ->withSum("entresM","quantite")
            ->withSum("sortiesM","quantite")
            ->withSum("inventaires","qte_reelle")
            ->with("entresM")->paginate(10);
        }else{
            return Produit::withSum("entresM","quantite")
            ->withSum("sortiesM","quantite")
            ->withSum("inventaires","qte_reelle")
            ->with("entresM")->paginate(10);          
          }
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $produit=Produit::create($request->all());
        return $produit;
    }

    
    public function show(Produit $produit)
    {
        return $produit;
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, Produit $produit)
    {
        return $produit->update($request->all());
    }

    
    public function destroy(Produit $produit)
    {
        $produit->delete();
       return 1;
    }
}
