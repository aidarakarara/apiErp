<?php

namespace App\Http\Controllers;

use App\Models\EntreeMagasin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EntreeMagasinController extends Controller
{
   
    
    public function index()
    {
        return EntreeMagasin::paginate(10);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $entreeMagasin=EntreeMagasin::create($request->all());
        return $entreeMagasin;
    }

    
    public function show(EntreeMagasin $entreeMagasin)
    {
        return $entreeMagasin;
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, EntreeMagasin $entreeMagasin)
    {
        return $entreeMagasin->update($request->all());
    }

    
    public function destroy(EntreeMagasin $entreeMagasin)
    {
        $entreeMagasin->delete();
       return 1;
    }
}
