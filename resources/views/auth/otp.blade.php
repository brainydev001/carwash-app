@extends('layouts.app')

@section('content')
<div class="row align-items-center h-100">
    <form action="{{ route('reset-otp') }}" method="POST" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
        @csrf

        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
            </svg>
        </a>
        <h1 class="h6 mb-3">
            Reset Password
        </h1>
        <div class="form-group">
            <label for="inputEmail" class="sr-only">
                
            </label>
            <input type="password" name="otp" id="inputEmail" class="form-control form-control-lg"
                placeholder="Enter OTP">
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control form-control-lg"
                placeholder="New Password">
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" name="password_confirmation" id="inputPassword" class="form-control form-control-lg"
                placeholder="Confirm Password">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Reset password
        </button>
        {{-- home --}}
        <div class="text-center mt-3">
            <a href="{{ url('/') }}">
                Home
            </a>
        </div>
        <p class="mt-5 mb-3 text-muted">© {{ date('Y') }}</p>
    </form>
</div>
@endsection
