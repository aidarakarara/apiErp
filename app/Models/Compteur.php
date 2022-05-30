<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compteur extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];


    public function pistolet()
    {
        return  $this->belongsTo(Pistolet::class);
    }

}
