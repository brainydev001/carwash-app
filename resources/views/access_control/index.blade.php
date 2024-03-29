@extends('layouts.admin',['title' => 'Access control'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
    {{-- Create --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#createRoleModal">
        Create role
    </button>
    {{-- Create --}}
    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#craetePermissionModal">
        Create permission
    </button>
</div>


{{-- modals --}}
@include('access_control.modals')

@endsection