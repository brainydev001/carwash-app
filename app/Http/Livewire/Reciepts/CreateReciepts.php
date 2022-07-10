<?php

namespace App\Http\Livewire\Reciepts;

use Livewire\Component;
use App\Models\Staff;
use App\Models\Expense;
use App\Models\Document;

class CreateReciepts extends Component
{
    public $name;
    public $expense;
    public $document;

    
    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string'],
        'expense' => ['required'],
    ];

    public function mount()
    {
        $this->staffs =  Staff::all();
        $this->expenses = Expense::all();
    }

    public function render()
    {
        return view('livewire.reciepts.create-reciepts');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        
        $staff_id = $data['name'];
        $commission = Staff::where([
            ['id', '=' , $staff_id]
        ])->pluck('commission')->first();


        // store
        // Expense::create($data);

        // return redirect()->to('expenses/manager')->with('success-message', 'Expense created');
    }
}
