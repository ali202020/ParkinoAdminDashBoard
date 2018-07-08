<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Http\Resources\ImageApi;

class ImageController extends Controller
{
    //
    public function obtainImgApi(Request $p_id){
      $p_areas = Image::where('parking_areas_id','=',$p_id->garage_id)->get();
      return ImageApi::collection($p_areas);
    }
}
