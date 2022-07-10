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

    
}
