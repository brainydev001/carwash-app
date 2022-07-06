<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use App\Models\BodyType;
use App\Models\Price;

class AddBodyType extends Component
{
    public $body_types;
    public $body_type_id;
    public $price;
    public $service;

    /**
     * Validation rules
     */
    protected $rules = [
        'price' => ['required', 'numeric']
    ];

    public function mount($service)
    {
        $this->body_types = BodyType::all();
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.services.add-body-type');
    }

    /**
     * Select body type
     */
    public function selectBodyType($id)
    {
        $this->body_type_id = $id;
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['created_by'] = auth()->user()->id;
        $data['service_id'] = $this->service_id;
        $data['body_type_id'] = $this->body_type_id;

        // store
        Price::create($data);

    }
}
