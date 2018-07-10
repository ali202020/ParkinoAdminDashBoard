<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\SystemUser;

class ReservationController extends Controller
{
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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      // $Reservation = Reservation::find($id);
      // $Reservation->state = 0;
      // Reservation::where('id',$id)->delete();
      // return redirect()->route('Reservation.index');
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
        Reservation::where('id',$id)->delete();
        return redirect()->route('Reservation.index');
    }
}
