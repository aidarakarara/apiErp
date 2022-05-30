<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VenteTpe extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function caisse()
    {
        return  $this->belongsTo(Caisse::class);
    }

    
}
