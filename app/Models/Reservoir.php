<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservoir extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function pistolets(){
        return $this->hasMany(Pistolet::class);
    }
    public function stocks(){
        return $this->hasMany(Stock::class);
    }
    public function receptions(){
        return $this->hasMany(Reception::class);
    }
    
    public function remise_cuves()
    {
       return $this->hasMany(RemiseCuve::class);
    }
}
