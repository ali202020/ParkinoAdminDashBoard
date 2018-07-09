<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\SystemUser;


class ReservationController extends Controller
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

        //$Reservations = Reservation::all();
        $usersReservations= array();
        $usersReservations = Reservation::with('users')->get();



        // $SystemUsers = SystemUser::where('id','=',$Reservations->user_id);
        //
        // return view('reservations.index_reservation',compact('Reservations','SystemUsers'));
        return view('reservations.index_reservation')->with('usersReservations',$usersReservations);
    }


    public function disableState($id){
      $Reservation = Reservation::find($id);
      $Reservation->state = 0;
      return redirect()->route('Reservation_disable');


    }




}
