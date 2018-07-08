<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    public $timestamps = false;

    protected $fillable = [
        'parking_areas_id', 'park_image'
    ];

    // public function p_area(){
    //   return $this->belongsTo('App\ParkingArea');
    // }
}
