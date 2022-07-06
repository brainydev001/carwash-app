<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // customer index page
    public function index()
    {
        return view('customers.index');
    }

    // customer booking  page
    public function bookings()
    {
        return view('customers.booking');
    }

    // single booking page
    public function singleBooking()
    {
        return view('customers.single_booking');
    }
}
