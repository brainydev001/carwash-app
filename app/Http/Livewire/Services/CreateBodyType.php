<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use App\Models\BodyType;

class CreateBodyType extends Component
{

    public $name;
    public $description;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:body_types'],
        'description' => ['required', 'string']
    ];

    public function render()
    {
        return view('livewire.services.create-body-type');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['created_by'] = auth()->user()->id;
        
        // store
        BodyType::create($data);

        return redirect()->to('services/manager')->with('success-message', 'Body type created');
    }
}
