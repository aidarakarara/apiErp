<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    use HasFactory;
        protected $guarded=[];
    protected $with=[
        'reservoir'
    ];
    public function reservoir()
    {
       return $this->belongsTo(Reservoir::class);
    }
}
