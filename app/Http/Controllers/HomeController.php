<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use Charts;
use App\SystemUser;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 10, 'height' => 2])
        ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
        ->datasets([
            [
                "label" => "Parking_Areas Owners",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [20, 10, 30, 40, 22, 30, 15],
            ],
            [
                "label" => "Users ",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [12, 33, 25, 40, 43, 23, 40],
            ]
        ])
        ->options([]);

        //Recently added users
        $SystemUsers= array();
        $SystemUsers = DB::table('users')->orderBy('created_at', 'desc')->first();
        var_dump($SystemUsers);
        die();
        $user_count = DB::table('users')->count();
        $pa_count = DB::table('parkingareas')->count();
        $total_owners = DB::table('owners')->count();
        $total_cards = DB::table('cards')->count();









        return view('main', compact('SystemUsers','chartjs','user_count','pa_count','total_owners','total_cards'));
        //return view('main');

    }
}
