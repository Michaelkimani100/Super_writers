<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        return view('/admin/index');
    }
    public function logout()
    {
       auth()->logout();
        return redirect('/login');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function approvedusers()
    {
        $users= User::where(['approved'=>1,'admin'=>0])->paginate(5);

        return view('/admin/approvedusers')->with('users',$users);
    }
   
   
}
