<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class usersignupController extends Controller
{
    public function getIndex()
    {   
       
        $user = User::all();
        return view('usersignup')->with(['table'=>$user]);
    }

        public function getUserSave(Request $request)
    {
        $abcd = new User();
        $abcd->name = $request->name;
        $abcd->email = $request->email;
        $abcd->password=$request->password;
        $abcd->save();

        return redirect('usersignup')->with('status','Data Has Been Successfully SignUp');
    }

    
}
