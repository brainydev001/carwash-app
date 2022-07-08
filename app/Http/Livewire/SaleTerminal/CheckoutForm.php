<?php

namespace App\Http\Livewire\SaleTerminal;

use Livewire\Component;

class CheckoutForm extends Component
{
    public $price;

    public function render()
    {
        return view('livewire.sale-terminal.checkout-form');
    }
}
