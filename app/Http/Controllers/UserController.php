<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function addUser(Request $request)
    {
       $user = User::create([
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => $request->password ,
        ]);

//        $user = new User ;
//        $user->name = $request->name ;
//            $user->email = $request->email ;
//            $user->password = $request->password ;
//       $user->setConnection('tenant');
//       $user->save();
        return redirect(route('register'))->with('msg' , "User Registered Successfully");
    }

    public function getusers()
    {
        $users = User::all();
         return view('show')->with('users' ,$users);
    }


}
