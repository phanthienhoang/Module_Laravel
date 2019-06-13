<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = 
        [
            'fullname',
            'email',
            'phone',
            'date',
            'amount',
            'address',
            'message'
        ];
}
