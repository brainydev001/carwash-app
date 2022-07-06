@extends('layouts.admin',['title' => 'Booking number : 34882677'])

@section('page')

{{-- customers data table include --}}
@include('customers\inc\booking_data')

{{--customer modal includes --}}
@include('customers\modals')

@endsection