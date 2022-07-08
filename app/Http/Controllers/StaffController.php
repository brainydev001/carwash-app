<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    // index
    public function index()
    {
        return view('staff.index');
    }

    // display all staff members
    public function staffs()
    {
        $staffs = Staff::all();

        return view('staff.all-staff',compact(
            'staffs'
        ));
    }

}
