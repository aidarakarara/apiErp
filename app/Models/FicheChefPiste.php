<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FicheChefPiste extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

     public function venteTpes()
    {
        return $this->hasMany(VenteTpe::class);
    }
    public function depenses()
    {
        return $this->hasMany(Depense::class);
    }
    public function bonClients()
    {
        return $this->hasMany(BonClient::class);
    }
    public function compteurs()
    {
        return $this->hasMany(Compteur::class);
    }


    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    public function pompe()
    {
        return  $this->belongsTo(Pompe::class);
    }
    public function caisse()
    {
        return  $this->belongsTo(Caisse::class);
    }

}
