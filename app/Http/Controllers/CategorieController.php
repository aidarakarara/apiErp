<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategorieController extends Controller
{
   
    
    public function index()
    {
        return Categorie::all();
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $categorie=Categorie::create($request->all());
        return $categorie;
    }

    
    public function show(Categorie $categorie)
    {
        return $categorie->pistolets()->get();
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, Categorie $categorie)
    {
        return $categorie->update($request->all());
    }

    
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
       return 1;
    }
}
