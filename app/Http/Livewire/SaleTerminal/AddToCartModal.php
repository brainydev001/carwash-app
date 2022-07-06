<?php

namespace App\Http\Livewire\SaleTerminal;

use Livewire\Component;

class AddToCartModal extends Component
{
    public $service;
    
    public function render()
    {
        return view('livewire.sale-terminal.add-to-cart-modal');
    }
}
