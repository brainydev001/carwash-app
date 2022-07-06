<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use App\Models\Service;

class CreateService extends Component
{
    public $name;
    public $price;
    public $description;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:services'],
        'description' => ['required', 'string'],
        'price' => ['required', 'numeric']
    ];

    public function render()
    {
        return view('livewire.services.create-service');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['created_by'] = auth()->user()->id;
        
        // store
        $service = Service::create($data);

        return redirect()->to('services/manager')->with('success-message', 'Body type created');
    }
    
}
