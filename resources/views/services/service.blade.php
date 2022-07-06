@extends('layouts.admin', ['title' => $service->name])

@section('page')
    {{-- toolbar --}}
    <div class="container-fluid d-flex">
        {{-- body type --}}
        <div class="dropdown mr-2">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Body types
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a data-toggle="modal" data-target="#addBodyTypeModal" class="dropdown-item" href="#">
                    <i class="fe fe-plus"></i>
                    <span>Add new</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fe fe-eye"></i>
                    <span>View all</span>
                </a>
            </div>
        </div>
        {{-- manage --}}
        <div class="dropdown mr-2">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Manage
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                    <i class="fe fe-edit text-primary"></i>
                    <span>Edit</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fe fe-trash text-danger"></i>
                    <span>Delete</span>
                </a>
            </div>
        </div>
    </div>

    {{-- modals --}}
    @include('services.modals')
@endsection
