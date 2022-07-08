@extends('layouts.admin',['title' => 'Services'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
     {{-- all services --}}
     <a href="{{ url('all-services') }}" class="btn btn-sm btn-primary mr-2">
        All Services
    </a>
    {{-- Create body type --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteBodyTypeModal">
        Create body type
    </button>
    {{-- Create service --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteServiceModal">
        Create service
    </button>  
</div>

{{-- modals --}}
@include('services.modals')

@endsection