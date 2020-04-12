<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'checked',
        'description',
        'interest',
        'date_of_birth',
        'email',
    ];

    public function creditCard()
    {
        return $this->hasMany('App\Credit_Card');
    }
}
