@extends('layouts.app')

@section('content')
<div class="row align-items-center h-100">
    <form action="{{ route('register') }}" method="POST" class="col-lg-6 col-md-8 col-10 mx-auto">
        @csrf

        <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
            <h2 class="my-3">Register</h2>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" id="name">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="phone_number">Phone number</label>
                <input type="text" name="phone_number" value="{{ old('phone_number') }}" id="phone_number"
                    class="form-control @error('phone_number') is-invalid @enderror">
                @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <hr class="my-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputPassword5">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="inputPassword5">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword6">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="inputPassword6">
                </div>
            </div>
            <div class="col-md-6">
                <p class="mb-2">Password requirements</p>
                <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following
                    requirements: </p>
                <ul class="small text-muted pl-4 mb-0">
                    <li> Minimum 8 character </li>
                    <li>At least one special character</li>
                    <li>At least one number</li>
                    <li>Can’t be the same as a previous password </li>
                </ul>
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        {{-- login --}}
        <div class="text-center mt-3">
            <a href="{{ route('login') }}">
                Already have account?
            </a>
        </div>
        {{-- home --}}
        <div class="text-center mt-3">
            <a href="{{ url('/') }}">
                Home
            </a>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">© {{ date('Y') }}</p>
    </form>
</div>
@endsection