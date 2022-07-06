@extends('layouts.admin',['title' => 'Customers & Bookings'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
    {{-- Create --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#createRoleModal">
        Add Booking
    </button>
</div>


{{-- customers data table include --}}
@include('customers\inc\data_table')

{{--customer modal includes --}}
@include('customers\modals')

@endsection