@extends('layouts.admin',['title' => 'Staff'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
     {{-- all services --}}
     <a href="{{ url('all-staff') }}" class="btn btn-sm btn-primary mr-2">
        All Staff
    </a>
    {{-- Create body type --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craeteStaffModal">
        Create Staff Member
    </button>
</div>

{{-- modals --}}
@include('staff.modals')

@endsection