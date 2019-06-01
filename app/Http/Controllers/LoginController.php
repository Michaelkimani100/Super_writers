<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use App\User;
class LoginController extends Controller
{
    use AuthenticatesUsers;
    //
    public function login(Request $request)
    {
        //create rules for validation

        $rules=array(
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:3'
        );
        //run these valiidations on input form
        $validator=Validator::make(Input::all(),$rules);
        //if validator fails redirect to form
        if($validator->fails())
        {
            return Redirect::to('/login')
            ->withErrors($validator)
            ->withInput(Input::except('password'));

        }
        else{
            $userdata=array(
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            );
            //attempt to login
            if(Auth::attempt($userdata))
            {
                //validation successful
                $user=User::where('email',$request->email)->first();
                if($user->is_admin())
                {
                    return redirect()->route('admin');
                }
                else
                {
                    return redirect()->route('writer');
                }

            }
            else{
                return Redirect::to('/login');
            }
            
        }
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

