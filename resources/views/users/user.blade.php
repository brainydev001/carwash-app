@extends('layouts.admin',[
    'title' => $user->name,
    'breadcrumbs' => [
        'User manager' => url('users/manager'),
        'All users' => url('users')
    ]
])

@section('page')
{{-- toolbar --}}
<div class="container-fluid">
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="#" class="btn mb-2 btn-secondary" title="View all users">
                <i class="fe fe-mail fe-16"></i>
                <span class="pl-1">Email</span>
            </a>
            <a href="#" class="btn mb-2 btn-secondary" title="View all users">
                <i class="fe fe-send fe-16"></i>
                <span class="pl-1">SMS</span>
            </a>
            <button type="button" class="btn mb-2 btn-secondary">2</button>
            <button type="button" class="btn mb-2 btn-secondary">3</button>
            <button type="button" class="btn mb-2 btn-secondary">4</button>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
            <a href="#" class="btn mb-2 btn-primary" title="Create new user">
                <i class="fe fe-edit fe-16"></i>
                <span class="pl-1">Edit</span>
            </a>
        </div>
        <div class="mx-2" role="group" aria-label="Third group">
            <button type="button" class="btn mb-2 btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fe fe-more-horizontal fe-16"></i>
            </button>
            <div class="dropdown-menu bg-light dropdown-menu-right">
                <a class="dropdown-item" href="#">
                    Password reset link
                </a>
                <a class="dropdown-item" href="{{ url('password-reset-otp/'.$user->username) }}">
                    Password reset OTP
                </a>
                <a class="dropdown-item" href="#">
                    Archive user
                </a>
                <a class="dropdown-item" href="#">
                    Suspend user
                </a>
            </div>
        </div>
    </div>
</div>

{{-- otp alerts --}}
<div class="container-fluid">
    {{-- @include('users.inc.otp-alerts')    --}}
</div>

    
@endsection