@extends('layouts.admin',[
'title' => 'All expenses',
'breadcrumbs' => [
'Expenses manager' => url('expenses/manager')
]
])

@section('page')
{{-- users table --}}
@include('expenses.inc.expense-table')

@endsection