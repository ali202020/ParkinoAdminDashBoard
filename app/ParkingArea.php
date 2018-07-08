<?php

namespace App;

use App\Owner;

use Illuminate\Database\Eloquent\Model;

class ParkingArea extends Model
{
    //
    protected $table = 'parkingareas';

    public function owners(){
      return $this->belongsTo('App\Owner','owner_id');
    }

}
