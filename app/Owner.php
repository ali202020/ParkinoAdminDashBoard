<?php

namespace App;
use App\ParkingArea;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    protected $attributes = ['garage_id' => '0'];

    public function parkings(){
      return $this->hasMany('App\ParkingArea','owner_id');
    }
}
