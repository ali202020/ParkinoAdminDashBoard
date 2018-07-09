<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = "make_reservations";

    public function users(){
      return $this->belongsTo('App\SystemUser','user_id');
    }
}
