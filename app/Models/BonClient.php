<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BonClient extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $cast = [
        'etat' => 'boolean',
    ];

    public function caisse()
    {
        return  $this->belongsTo(Caisse::class);
        
    }

    public function encaissement()
    {
        return  $this->belongsTo(Encaissement::class);
    }

    
}
