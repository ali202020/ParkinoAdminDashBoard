<?php

namespace App\Policies;
use Illuminate\Support\Facades\Hash;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function create(User $user)
    {
        if($user->email === "ali@superadmin.com" && Hash::check('123456',$user->password) === true){
          return true;
        }else{
          return false;
        }
    }






}
