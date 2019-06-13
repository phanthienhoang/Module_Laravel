<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'tourName',
        'content',
        'departureDay',
        'place',
        'organizer_id',
        'transport',
        'price',
        'image'
    ];

    public function organizer()
    {
    	return $this->belongsTo('App\Organizer');
    }

    public function detailtour()
    {
    	return $this->hasMany('App\Detailtour');
    }
}
