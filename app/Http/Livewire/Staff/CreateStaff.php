<?php

namespace App\Http\Livewire\Staff;

use Livewire\Component;
use App\Models\Staff;

class CreateStaff extends Component
{
    public $name;
    public $phonenumber;
    public $email;
    public $commission;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string'],
        'phonenumber' => ['required', 'string', 'unique:staff'],
        'email' => ['required', 'string', 'unique:staff'],
        'commission' => ['required', 'string', 'unique:staff'],
    ];

    public function render()
    {
        return view('livewire.staff.create-staff');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['created_by'] = auth()->user()->id;
        
        // store
        Staff::create($data);

        return redirect()->to('staff/manager')->with('success-message', 'Staff member created');
    }
}
