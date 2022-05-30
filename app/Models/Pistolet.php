<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pistolet extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
   // protected $with=['compteur'];
    
    public function pompe()
    {
        return  $this->belongsTo(Pompe::class);
    }
    public function reservoir()
    {
        return  $this->belongsTo(Reservoir::class);
    }
    public function compteur()
    {
        return  $this->hasMany(Compteur::class);
    }
}
