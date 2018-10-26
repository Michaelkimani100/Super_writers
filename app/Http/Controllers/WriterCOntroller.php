<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriterCOntroller extends Controller
{
    //
    public function home(){
        return view('/writer/index');
    }
}
