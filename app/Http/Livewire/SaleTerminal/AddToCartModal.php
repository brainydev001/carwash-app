<?php

namespace App\Http\Livewire\SaleTerminal;

use Livewire\Component;
use App\Models\BodyType;

class AddToCartModal extends Component
{
    public $service;
    
    public function mount($service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.sale-terminal.add-to-cart-modal');
    }
}
