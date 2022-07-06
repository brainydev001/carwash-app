@extends('layouts.admin',['title' => 'Customers & Bookings'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
    {{-- Create --}}
    <a href="{{ url('sale-terminal') }}">
        <button class="btn btn-sm btn-primary mr-2">
            Add Booking 
        </button>
    </a>
</div>


{{-- customers data table include --}}
@include('customers\inc\data_table')

{{--customer modal includes --}}
@include('customers\modals')

@endsection