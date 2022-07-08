<?php

namespace App\Http\Livewire\Expenses;

use Livewire\Component;
use App\Models\Expense;

class CreateExpense extends Component
{
    public $name;
    public $type;
    public $amount;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string'],
        'type' => ['required', 'string', 'unique:expenses'],
        'amount' => ['required', 'string', 'numeric'],
    ];

    public function render()
    {
        return view('livewire.expenses.create-expense');
    }

    public function submit()
    {
        // validation
        $data = $this->validate();
        $data['created_by'] = auth()->user()->id;
        
        // store
        Expense::create($data);

        return redirect()->to('expenses/manager')->with('success-message', 'Expense created');
    }
}
