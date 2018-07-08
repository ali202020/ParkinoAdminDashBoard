<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class RegFormController extends Controller
{
    public function getForm(){
      // return view('auth.register');
      return view('custom_reg_form');
    }
    public function postForm(Request $request){
      $admin = new User;
      $admin->name = $request->name;
      $admin->email= $request->email;
      $admin->password = Hash::make($request->password);
      $admin->save();
      return redirect()->route('home');
    }
}
