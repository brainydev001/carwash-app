@extends('layouts.admin',['title' => 'Services'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
    {{-- Create --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteServiceModal">
        Create service
    </button>
    {{-- all services --}}
    <a href="{{ url('all-services') }}" class="btn btn-sm btn-primary mr-2">
        All services
    </a>
    {{-- Create body type --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteBodyTypeModal">
        Create body type
    </button>
</div>

{{-- modals --}}
@include('services.modals')

@endsection