@extends('layouts.admin',[
    'title' => 'Create user',
    'breadcrumbs' => [
        'User manager' => url('users/manager')
    ]
])

@section('page')

{{-- create form --}}
@livewire('users.create')

@endsection