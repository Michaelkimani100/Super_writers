<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;

class WriterController extends Controller
{
    public function index()
    {
        return view('/writer/index');
    }
   

}
