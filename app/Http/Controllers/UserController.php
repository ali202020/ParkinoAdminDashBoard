<?php

namespace App\Http\Controllers;
use App\SystemUser;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
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
      $SystemUsers = SystemUser::all();
      return view('users.index_user')->with('SystemUsers',$SystemUsers);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('users.create_user');
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
      $this->validate($request,['email'=>'email',
                                'name'=>'required',
                                'phone_number'=>'numeric',
                                'password'=>'required',
                                'points'=>'numeric',
                                'consumed_points'=>'numeric',

                                ]);
      //storing
      $SystemUser = new SystemUser;
      $SystemUser->email = $request->email;
      $SystemUser->name = $request->name;
      $SystemUser->phone_number = $request->phone_number;
      $SystemUser->password = Hash::make($request->password);
      $SystemUser->points = $request->points;
      $SystemUser->consumed_points = $request->consumed_points;
      $SystemUser->save();
      //redirect
      return redirect()->route('User.show',['id'=>$SystemUser->id]);


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
      $SystemUser = SystemUser::find($id);
      return view('users.show_user')->with('SystemUser',$SystemUser);
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
      $SystemUser = SystemUser::find($id);
      //return to a view
      return view('users.edit_user')->with('SystemUser',$SystemUser);
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
                                'phone_number'=>'numeric',
                                'points'=>'numeric',
                                'consumed_points'=>'numeric',
                                'password'=>'required',

                                ]);
      //updating the data
      $SystemUser = SystemUser::find($id);
      $SystemUser->email = $request->input('email');
      $SystemUser->name = $request->input('name');
      $SystemUser->phone_number = $request->input('phone_number');
      $SystemUser->password = Hash::make($request->input('password'));
      $SystemUser->points = $request->input('points');
      $SystemUser->consumed_points = $request->input('consumed_points');
      $SystemUser->save();
      //redirect
      return redirect()->route('User.show',['id'=>$SystemUser->id]);



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
      SystemUser::where('id',$id)->delete();
      //redirecting
      return redirect()->route('User.index');
  }
}
