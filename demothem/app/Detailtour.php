<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailtour extends Model
{
   protected $table = 'detailtour';

   public function tour()
   {
      return $this->belongsTo('App\Tour');
   }
}
