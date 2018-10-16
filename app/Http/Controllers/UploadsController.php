<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function store(request $request)
    {
        $request->file('trial');
        return $request->trial->store('public');
    }
}
