<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Price;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    /**
     * Show service
     */
    public function show(Service $service)
    {
        return view('services.service', compact(
            'service'
        ));
    }

    /**
     * Show all services
     */
    public function services()
    {
        $services = Service::latest()->get();

        return view('services.services',compact(
            'services'
        ));
    }

    /**
     * Add body type
     */
    public function addBodyType(Request $request, $id)
    {
        $data = $request->all();
        $data['service_id'] = $id;
        $data['created_by'] = auth()->user()->id;
        Price::create($data);
        return back()->with('success-message','Price add for body type');
    }
}
