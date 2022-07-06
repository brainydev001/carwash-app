<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Otp;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    /**
     * All users
     */
    public function users()
    {
        $users = User::all();

        return view('users.users',compact(
            'users'
        ));
    }

    /**
     * Show user
     */
    public function show(User $user)
    {
        return view('users.user',compact(
            'user'
        ));
    }

    /**
     * Create user
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * User password reset via OTP
     */
    public function passwordResetOTP(User $user)
    {
        $password = Str::random(8);
        $token = Str::random(32);

        // store otp
        Otp::create([
            'user_id' => $user->id,
            'password' => $password,
            'sent_by' => auth()->user()->id,
            'token' => $token
        ]);

        // update user
        $user->password = Hash::make($password);
        $user->save();

        // send otp email
        return redirect()->route('send-otp-mail',[
            'email' => $user->email,
            'otp' => $password,
            'token' => $token
        ]);
    }
}
