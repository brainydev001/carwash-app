<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    // customer index page
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index',compact(
            'customers'
        ));
    }

    /**
     * Show customers
     */
    public function show(Customer $customers)
    {
        return view('customers.index',compact(
            'customers'
        ));
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
