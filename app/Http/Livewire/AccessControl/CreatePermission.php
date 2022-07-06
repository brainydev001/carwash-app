<?php

namespace App\Http\Livewire\AccessControl;

use Livewire\Component;
use App\Models\Permission;

class CreatePermission extends Component
{

    public $name;
    public $display_name;
    public $description;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:roles']
    ];

    public function render()
    {
        return view('livewire.access-control.create-permission');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['display_name'] = $this->display_name;
        $data['description'] = $this->description;

        // store
        Permission::create($data);

        return redirect()->to('access_control/manager')->with('success-message', 'Permission created');
    }
}
