<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Otp;

class Create extends Component
{
    public $name;
    public $username;
    public $phone_number;
    public $email;

    /**
     * Validation rules
     */
    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'unique:users'],
        'phone_number' => ['required', 'string', 'min:10', 'max:20', 'unique:users'],
        'email' => ['required', 'unique:users']
    ];

    /**
     * Mount hook
     */
    public function mount()
    {
        $this->username = 'user'.Str::random(16);
    }

    /**
     * Main render
     */
    public function render()
    {
        return view('livewire.users.create');
    }

    /**
     * On form submit
     */
    public function submit()
    {
        // validation
        $data = $this->validate();
        
        $data['created_by'] = auth()->user()->id;

        $password = Str::random(8);
        $data['password'] = Hash::make($password);

        $user = User::create($data);

        // store otp
        $token = Str::random(32);

        Otp::create([
            'user_id' => $user->id,
            'password' => $password,
            'sent_by' => auth()->user()->id,
            'token' => $token
        ]);

        // send otp email
        return redirect()->route('send-otp-mail',[
            'email' => $user->email,
            'otp' => $password,
            'token' => $token
        ]);
    }
}
