<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\BodyType;
use App\Models\Price;
use App\Models\Customer;
use App\Models\Document;

class SaleTerminalController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('sale_terminal.index', compact(
            'services'
        ));
    }

    /**
     * Add to cart
     */
    public function addToCart($service_id, $body_type_id)
    {
        $price = Price::where([
            ['service_id','=',$service_id],
            ['body_type_id','=',$body_type_id]
        ])->first();

        $service = Service::find($service_id);
        $body_type = BodyType::find($body_type_id);
        
        return view('sale_terminal.checkout',compact(
            'price',
            'service',
            'body_type'
        ));
    }

    /**
     * Checkout
     */
    public function checkout(Request $request, $price_id)
    {
        $data = $request->validate([
            'plate_number' => 'required|string',
            'phone_number' => 'required|string',
            'name' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string'
        ]);

        // check if customer exists
        $customer_id = null;
        $customer = Customer::where('plate_number',$request->input('plate_number'))->first();

        if ($customer){
            $customer_id = $customer->id;
        }
        else{
            $data['email'] = $request->input('email');
            $data['notes'] = $request->input('notes');
            $data['created_by'] = auth()->user()->id;

            $new_customer = Customer::create($data);
            $customer_id = $new_customer->id;
        }

        // create document
        $document = Document::create([
            'customer_id' => $customer_id,
            'type' => 'sale',
            'code' => 200,
            'number' => date('-jny-Gi',time()),
            'price_id' => $price_id,
            'isPaid' => true,
            'due_date' => date('Y-m-d H:i:s', time()),
            'created_by' => auth()->user()->id
        ]);

        $document->number = $document->id . $document->number;
        $document->save();

        return redirect()->to('sale-terminal')->with('success-message','Sale made successfully');
    }
}
