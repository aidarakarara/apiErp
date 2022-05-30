<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pompe extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    //protected $with=['pistolets'];
    
    public function pistolets(){
        return $this->hasMany(Pistolet::class);
    }
    //Autres
    public function lubrifiants(){
        return $this->hasMany(Lubrifiants::class);
    }
    public function accessoires(){
        return $this->hasMany(Accessoires::class);
    }
    public function ventes()
    {
        return $this->hasManyThrough(Caisse::class ,VenteTpe::class);
    }
    

}
