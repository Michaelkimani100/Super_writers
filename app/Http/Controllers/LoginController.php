<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    //
    public function login(Request $request)
    {
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]))
        {
            $user=User::where('email',$request->email)->first();
            if($user->is_admin())
            {
                return redirect()->route('admin');
            }
            return redirect()->route('writer');

        }

    }
}
