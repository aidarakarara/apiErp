<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function inventaires()
    {
        return $this->hasMany(Inventaire::class);
    }

    public function entresM()
    {
        return $this->hasMany(EntreM::class);
    }
    public function sortiesM()
    {
        return $this->hasMany(SortieM::class);
    }
}
