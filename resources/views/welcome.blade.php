@extends('layouts.app')

@section('content')
<div class="container">
    {{-- name --}}
    @auth
        <div class="mt-3 mb-3">
            <div>{{ auth()->user()->name }}</div>
            <div>{{ '@'.auth()->user()->username }}</div>
            <div>{{ auth()->user()->email }}</div>
            <div>{{ auth()->user()->phone_number }}</div>
            {{-- logout --}}
            <div class="mt-1">
                <a href="{{ url('logout') }}">
                    Logout
                </a>
            </div>
        </div>    
    @endauth
    {{-- main card --}}
    <div class="card p-4 mt-3">
        <h3 class="text-center m-auto col-md-6">
            Welcome to Mneti multi purpose admin software.
        </h3>
        <div class="mt-3 mb-3 text-center">
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary m-2">
                    Login
                </a>
                <a href="{{ route('register') }}" class="btn btn-primary m-2">
                    Register
                </a>
            @else
                <a href="{{ url('dashboard') }}" class="btn btn-success m-2">
                    Dashboard
                </a>
            @endguest
        </div>
    </div>
</div>
@endsection