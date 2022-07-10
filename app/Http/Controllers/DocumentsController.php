<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\BodyType;
use App\Models\Commission;
use App\Models\Price;
use App\Models\Customer;
use App\Models\Document;
use App\Models\Staff;

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

    // single invoice
    public function invoice($id)
    {
        $invoice = Document::find($id);
        
        return view('documents.single-invoice', compact(
            'invoice'
        ));
    }

    // make reciept and calculate commissions
    public function store(Request $request,$id)
    {
        /**
         * Change isPaid to true in documents
         */
        Document::where('id',$id)->update(['isPaid'=> true]);
        
        /**
         * Commission
         */
        $commission = Staff::where([
            ['id', '=' , $request['name']]
        ])->pluck('commission')->first();

        $amount = Document::where([
            ['id', '=' , $id]
        ])->pluck('code')->first();
        
        $commissionPaid = $amount * $commission/100;

        // store commission
        $data = [
            'staff_id' => $request['name'],
            'document_id' => $id,
            'amount' => $commissionPaid
        ];
        Commission::create($data);

        return redirect()->to('invoices/manager')->with('success-message','Reciept created successfully');
    }

    // all recipts
    public function getReciepts()
    {
        /**
         * From documents table get all which isPaid is true
         */
        $reciepts = Document::where([
            ['isPaid','=',true]
        ])->orderBy('id','desc')->get();
            
        return view('documents.reciepts',  compact(
            'reciepts'
        ));
    }

    // single reciept
    public function reciept($id)
    {
        $reciept = Document::find($id);
        
        return view('documents.single-reciept', compact(
            'reciept'
        ));
    }

    // all commissions
    public function getCommissions()
    {
        $commissions = Commission::all();

        return view('documents.commissions', compact(
            'commissions'
        ));
    }
}
