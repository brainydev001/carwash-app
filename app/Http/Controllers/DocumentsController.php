<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\BodyType;
use App\Models\Price;
use App\Models\Customer;
use App\Models\Document;

class DocumentsController extends Controller
{
    public function index()
    {
        return view('documents.index');
    }

    // all invoices
    public function getInvoice()
    {
        /**
         * From documents table get all which isPaid is false
         */
        $invoices = Document::where([
            ['isPaid','=',false]
        ])->orderBy('id','desc')->get();

        return view('documents.invoice',  compact(
            'invoices'
        ));
    }

    // all recipts
    public function getReciepts()
    {
        /**
         * From documents table get all which isPaid is true
         */
        $reciepts = Document::where([
            ['isPaid','=',false]
        ])->orderBy('id','desc')->get();

        return view('documents.invoice',  compact(
            'reciepts'
        ));
    }

    // single invoice
    public function invoice($id)
    {
        $invoice = Document::find($id);
        
        return view('documents.single-invoice', compact(
            'invoice'
        ));
    }
}
