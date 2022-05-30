<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaire extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public  function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
