<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getHome()
    {
        return view('index');
    }
    public function getdashboardHome()
    {
        return view('/writer/index');
    }
    public function getReg()
    {
        return view('writer/reg');
    }
}
