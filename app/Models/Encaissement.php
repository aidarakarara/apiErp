<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Encaissement extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
     protected $with = ['bon'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function bon()
    {
        return $this->hasOne(BonClient::class);
    }
}
