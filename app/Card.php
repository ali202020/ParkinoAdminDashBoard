<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SystemUser;
use App\Card;

class Card extends Model
{
    //
    public function user_card(){
      return $this->belongsTo('App\SystemUser','user_id');
    }
}
