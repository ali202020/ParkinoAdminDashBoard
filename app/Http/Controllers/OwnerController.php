<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Owner;
use App\ParkingArea;
use Image;
use App\Image as ParkImage;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Owners = Owner::all();
        $PA = ParkingArea::all();
        return view('owners.index_owner',compact('Owners','PA'));    //->with('Owners',$Owners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('owners.create_owner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        // $this->validate($request,['email'=>'email',
        //                           'name'=>'required',
        //                           'phone_number'=>'numeric',
        //                           'ssd'=>'required',
        //                           'garage_points'=>'numeric',
        //                           'file'=>'image|nullable',
        //                           'P'=>'required',
        //                           'long'=>'required|numeric',
        //                           'lat'=>'required|numeric',
        //                           'slots_no'=>'required|numeric',
        //                           'no_of_free_slots'=>'nullable',
        //                           'price'=>'numeric|required',
        //                           'stars'=>'nullable'
        //
        //                           ]);

        //storing Owner
        $Owner = new Owner;
        $Owner->email = $request->email;

        $Owner->name = $request->name;
        $Owner->phone_number = $request->phone_number;
        $Owner->ssd = $request->ssd;
        $Owner->garage_points = $request->garage_points;
        $Owner->save();

        //storing ParkingArea
        $parking_area = new ParkingArea;
        $parking_area->name = $request->name;
        $parking_area->owner_id= Owner::all()->last()->id; //is it the optimal way
        $parking_area->long = floatval($request->long);
        $parking_area->lat = floatval($request->lat);
        $parking_area->slots_no = $request->slots_no;
        $parking_area->no_of_free_slots = $request->no_of_free_slots;
        $parking_area->price = $request->price;
        $parking_area->stars = $request->stars;
        $parking_area->save();

        // $images = $request->input('images');
        $file = $request->file('file');
        foreach ($file as $image) {
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('images/'.$filename);
          $access_location = 'http://192.168.1.7:8000/'.'images/'.$filename;
          Image::make($image)->resize(500,500)->save($location);
          $p_area = ParkingArea::all()->last();   // i think not the optimal way
          $ParkImage = ParkImage::create(['parking_areas_id' => $p_area->id,'park_image'=>$access_location]);
          // $ParkImage = new ParkImage;
          // $ParkImage->parking_areas_id = $p_area->id;
          // $ParkImage->park_image = $filename;
          // $ParkImage->save();

        }
        // if ($request->hasFile('images')) {
        //
        //
        // }

        //redirect
        return redirect()->route('Owner.show',['id'=>$Owner->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $Owner = Owner::find($id);
        $PA = ParkingArea::where('owner_id',$id)->get();
        return view('owners.show_owner',compact('Owner','PA'));//->with('Owner',$Owner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtaining the record
        $Owner = Owner::find($id);
        $PA = ParkingArea::where('owner_id',$id)->get();
        //return to a view
        return view('owners.edit_owner',compact('Owner','PA'));//->with('Owner',$Owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validating the request
        $this->validate($request,['email'=>'email',
                                  'name'=>'required',
                                  'garage_id'=>'nullable',
                                  'phone_number'=>'numeric',
                                  'ssd'=>'required',
                                  'garage_points'=>'numeric',
                                  'file'=>'image|nullable',
                                  'P'=>'required',
                                  'long'=>'required|numeric',
                                  'lat'=>'required|numeric',
                                  'slots_no'=>'required|numeric',
                                  'no_of_free_slots'=>'nullable',
                                  'price'=>'numeric|required',
                                  'stars'=>'nullable'
                                  ]);


        //updating Owner
        $Owner = Owner::find($id);
        $Owner->email = $request->input('email');
        $Owner->name = $request->input('name');
        $Owner->phone_number = $request->input('phone_number');
        $Owner->ssd = $request->input('ssd');
        $Owner->garage_points = $request->input('garage_points');
        $Owner->save();

        //updating ParkingArea
        $parking_area = ParkingArea::where('owner_id',$id)->first();
        $parking_area->name = $request->input('P');
        $parking_area->owner_id= $id;
        $parking_area->long = floatval($request->input('long'));
        $parking_area->lat = floatval($request->input('lat'));
        $parking_area->slots_no = $request->input('slots_no');
        $parking_area->no_of_free_slots = $request->input('no_of_free_slots');
        $parking_area->price = $request->input('price');
        $parking_area->stars = $request->input('stars');
        $parking_area->save();



        if ($request->hasFile('file')) {
          $images = $request->file('file');
          foreach ($images as $image) {
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(500,500)->save($location);
            $oldName = $parking_area->park_image;
            $deletion_name = substr($oldName,24);
            $parking_area->park_image = $filename;
            Storage::delete($deletion_name);
          }

        }

        //redirect
        return redirect()->route('Owner.show',['id'=>$Owner->id]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Owner::where('id',$id)->delete();

        // //deleting images(ther is bug here)
        // $img_records = array();
        // $img_records = ParkImage::where('parking_areas_id',$id)->park_image;
        //
        // foreach ($img_records as $img_record) {
        //   $img_path = $img_record;
        //   $deletion_name = substr($oldName,24);
        //   Storage::delete($deletion_name);
        // }

        //deleting image handle in the images table
        ParkImage::where('parking_areas_id',$id)->delete();

        ParkingArea::where('owner_id',$id)->delete();

        //redirecting
        return redirect()->route('Owner.index');
    }
}
