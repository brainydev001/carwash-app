@extends('layouts.admin',['title' => 'Users'])

@section('page')
{{-- toolbar --}}
<div class="container-fluid">
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="{{ url('users') }}" class="btn mb-2 btn-secondary" title="View all users">
                <i class="fe fe-users fe-16"></i>
                <span class="pl-1">All users</span>
            </a>
            <button type="button" class="btn mb-2 btn-secondary">2</button>
            <button type="button" class="btn mb-2 btn-secondary">3</button>
            <button type="button" class="btn mb-2 btn-secondary">4</button>
        </div>
        <div class="btn-group" role="group" aria-label="Third group">
            <a href="{{ url('user/create') }}" class="btn mb-2 btn-success" title="Create new user">
                <i class="fe fe-user-plus fe-16"></i>
                <span class="pl-1">New</span>
            </a>
        </div>
    </div>
</div>

{{-- metrics --}}
<div class="row mt-3 mb-3 container-fluid">
    {{-- total users --}}
    @livewire('metrics.overview',[
        'name' => 'Total users',
        'icon' => 'fe-users',
        'total' => 0,
        'percentage' => 10
    ])
</div>
@endsection