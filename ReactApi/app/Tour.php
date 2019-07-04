<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'tourName',
        'transport',
        'departureDay', 
    ];
}
