@extends('layouts.admin',[
'title' => 'All Staff Memmber',
'breadcrumbs' => [
'Staff manager' => url('staff/manager')
]
])

@section('page')
{{-- users table --}}
@include('staff.inc.staff-table')

@endsection