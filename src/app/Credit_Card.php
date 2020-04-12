<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit_Card extends Model
{
    //
    protected $fillable = [
        'type',
        'number',
        'name',
        'expirationDate',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    
}
