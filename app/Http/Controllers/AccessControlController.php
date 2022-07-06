<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessControlController extends Controller
{
    public function index()
    {
        return view('access_control.index');
    }
}
