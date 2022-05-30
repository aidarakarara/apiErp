<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    
    public function encaissements()
    {
       return $this->hasMany(Encaissement::class);
    }
    public function bonClients()
    {
        return $this->hasMany(BonClient::class);
    }
}
