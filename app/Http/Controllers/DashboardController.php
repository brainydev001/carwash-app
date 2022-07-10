<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $documents = Document::all();
        $sales = $documents->sum('code');

        return view('dashboard.index', compact(
            'customers',
            'documents',
            'sales'
        ));
    }
}
