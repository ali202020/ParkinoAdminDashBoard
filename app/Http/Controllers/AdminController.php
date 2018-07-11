<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $this->authorize('superAdminAction', User::class);
      $Admins = User::all();
      return view('admin.index_admin')->with('Admins',$Admins);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $this->authorize('superAdminAction', User::class);
        return view('admin.create_admin');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('superAdminAction', User::class);
        $this->validate($request,['email'=>'email',
                                  'name'=>'required',
                                  'password'=>'required',
                                ]);

        $Admin = new User;
        $Admin->name = $request->name;
        $Admin->email = $request->email;
        $Admin->password = $request->password;
        $Admin->save();
        return redirect()->route('Admin.show',['id'=>$Admin->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('superAdminAction', User::class);
        $Admin = User::find($id);
        return view('admin.show_admin')->with('Admin',$Admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('superAdminAction', User::class);
        $Admin = User::find($id);
        return view('admin.edit_admin')->with('Admin',$Admin);
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
        $this->authorize('superAdminAction', User::class);
        $this->validate($request,['email'=>'email',
                                  'name'=>'required',
                                  'password'=>'required',
                                ]);

        $Admin = new User;
        $Admin->name = $request->input('name');
        $Admin->email = $request->input('email');
        $Admin->password = $request->input('password');
        $Admin->save();
        return redirect()->route('Admin.show',['id'=>$Admin->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('superAdminAction', User::class);
        User::where('id',$id)->delete();
        return redirect()->route('Admin.index');
    }
}
