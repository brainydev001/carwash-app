<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    // index
    public function index()
    {
        return view('expenses.index');
    }

    // get all expenses
    public function expenses()
    {
        $expenses = Expense::all();

        return view('expenses.expenses',compact(
            'expenses'
        ));
    }
}
