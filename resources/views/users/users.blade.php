@extends('layouts.admin',[
'title' => 'All users',
'breadcrumbs' => [
'Users manager' => url('users/manager')
]
])

@section('page')
{{-- users table --}}
@include('users.inc.users-table')

@endsection