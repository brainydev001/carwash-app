@extends('layouts.admin',['title' => 'All Services'])

@section('admincss')
    
@endsection

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
    {{-- Create --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteServiceModal">
        Action btn
    </button>
</div>

{{-- services table --}}
@include('services.inc.services-table')

{{-- modals --}}
@include('services.modals')

@endsection

@section('adminjs')
    
@endsection