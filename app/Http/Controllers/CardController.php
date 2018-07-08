<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Card;

class CardController extends Controller
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

        $Cards = Card::all();
        return view('cards.index_card')->with('Cards',$Cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('cards.create_card');
    }






    public function store_code()
    {


        //*****************
        //Generating Data
        //*****************
        function generate_code($coulmn){
          $rand_array=array();
          //iterate fir a number of times
          for($i = 0;$i<=5;$i++){
            //generating rfid code
            $rand_code = (string) mt_rand(1000000,100000000000);

            //validating the code
            $stored_codes = DB::select('select ? from cards',[$coulmn]);
            foreach($stored_codes as $stored_code){
              if($rand_code == $stored_code){
              //generate another number and recheck
              $rand_code = mt_rand(1000000,100000000000);
              //reinitialize the array again
              $stored_codes = DB::select('select ? from cards',[$coulmn]);
              }

            }
            //after finishing the loop , so we are sure that the number wasnot previously stored in the table
            array_push($rand_array,$rand_code);

          }
          //then return the value of the array in order to be stored
          return $rand_array;
        }

        //---------------------
        //storing in the model
        //--------------------
        $generated_rfids = array();
        //$generated_qr_no = array();
        $generated_rfids = generate_code('rfid_no');
        //$generated_qrs = generate_code('qr_no');


        foreach($generated_rfids as $generated_rfid){
          $Card = new Card;
        	$Card->rfid_no = $generated_rfid;
          //we set also the state in that loop
          $Card->qr_no  = $generated_rfid;
          $Card->state = 0;
          $Card->save();
        }


        // foreach($generated_qrs as $generated_qr){
        // 	$Card->qr_no = $generated_qr;
        //
        // }
        // $Card->save();

        //redirect
        return redirect()->route('Card.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //obtaining the record and deleting it
        Card::where('id',$id)->delete();

        //redirecting
        return redirect()->route('Card.index');
    }
}
