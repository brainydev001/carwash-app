@extends('layouts.admin',[
    'title' => 'Brian Ngugi',
    'breadcrumbs' => [
        'Customers List' => url('customers/manager')
    ]
])

@section('page')

{{-- customers data table include --}}
@include('customers\inc\customer_data')

{{--customer modal includes --}}
@include('customers\modals')

@endsection