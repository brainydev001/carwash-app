<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

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
        return view('sale_terminal.checkout');
    }
}
