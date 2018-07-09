<?php

namespace App;
use App\Reservation;
use App\Card;
use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    protected $table = 'users';

    public function reserve(){
      return $this->hasMany('App\Reservation','user_id');
    }

    public function card(){
      return $this->hasMany('App\Card','user_id');
    }
}
