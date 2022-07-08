@extends('layouts.admin',['title' => 'Expenses'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
     {{-- all services --}}
     <a href="{{ url('all-expenses') }}" class="btn btn-sm btn-primary mr-2">
        All Expenses
    </a>
    {{-- Create body type --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteExpenseModal">
        Create New Expense
    </button>
</div>

{{-- modals --}}
@include('expenses.modals')

@endsection