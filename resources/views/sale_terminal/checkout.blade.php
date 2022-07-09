@extends('layouts.app')

@section('content')

{{-- alert --}}
@include('messages.alerts')

<div class="row mt-3 mb-3 container-fluid">
    <div class="col-md-8 p-2">
        <div class="card shadow mt-4">
            <h4>Customer Information</h4>
            <div class="card-body">
                {{-- data --}}
                <div class="row">
                    <div class="col-md-6 p-2">
                        {{-- name input --}}
                        <div class="form-group mb-3">
                            <label for="simpleinput">Name</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>
                        {{-- email --}}
                        <div class="form-group mb-3">
                            <label for="example-email">Email</label>
                            <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                        </div>
                        {{-- phone_number --}}
                        <div class="form-group mb-3">
                            <label for="phone_number">Phone number</label>
                            <input type="text" id="example-phone_number" name="phone_number" class="form-control"
                                placeholder="Phone number">
                        </div>
                        {{-- make --}}
                        <div class="form-group mb-3">
                            <label for="example-palaceholder">Make</label>
                            <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                        </div>
                        {{-- model --}}
                        <div class="form-group mb-3">
                            <label for="example-palaceholder">Model</label>
                            <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                        </div>
                        {{-- body type --}}
                        <div class="form-group mb-3">
                            <label for="example-palaceholder">Body Type</label>
                            <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                        </div>
                        {{-- vehicle plate number --}}
                        <div class="form-group mb-3">
                            <label for="plate_number">Vehicle plate number</label>
                            <input type="text" id="plate_number" class="form-control" name="plate_number"
                                placeholder="Vehicle Number Plate">
                        </div>
                    </div>
                    <!-- side column -->
                    <div class="col-md-6 p-2">
                        {{-- booking date and time --}}
                        <div class="form-group mb-3">
                            <label for="example-helping">Booking date & time</label>
                            <input type="text" id="example-helping" class="form-control" placeholder="Input with helping text">
                        </div>
                        {{-- staff in charge --}}
                        <div class="form-group mb-3">
                            <label for="example-readonly">Staff in charge</label>
                            <input type="text" readonly="" class="form-control-plaintext" placeholder="Staff Ngugi">
                        </div>
                        {{-- services offered --}}
                        <div class="form-group mb-3">
                            <h6>Services offered</h6>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <label for="example-services ml-4">
                                        <input type="checkbox" name="services" checked>
                                        Body Wash
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label for="example-services ml-4">
                                        <input type="checkbox" name="services" checked>
                                        Cleaning
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label for="example-services ml-4">
                                        <input type="checkbox" name="services" checked>
                                        Vaccum
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        {{-- created by --}}
                        <div class="form-group mb-3">
                            <label for="example-readonly">Created By</label>
                            <input type="text" id="example-helping" readonly="" class="form-control-plaintext"
                                placeholder="Brian">
                        </div>
                        {{-- notes --}}
                        <div class="form-group mb-3">
                            <label for="example-readonly">Notes</label>
                            <input type="text" readonly="" class="form-control-plaintext" id="example-static"
                                placeholder="Input additional notes">
                        </div>
        
                        {{-- amount paid --}}
                        <div class="form-group mb-3">
                            <label for="example-readonly">Amount Paid(ksh)</label>
                            <input type="text" readonly="" class="form-control-plaintext" id="example-static"
                                placeholder="Input additional notes">
                        </div>
                    </div>
                </div>
                {{-- toolbar --}}
                <div class="container-fluid">
                    <div class="float-right mt-4 mb-4">
                        {{-- edit --}}
                        <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#createRoleModal">
                            Save Changes
                        </button>
                        {{-- delete --}}
                        <button class="btn btn-sm btn-danger mr-2" data-toggle="modal" data-target="#craetePermissionModal">
                            Delete Booking
                        </button>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <div class="col-md-4 p-2 mt-4">
        <div class="card">
            <div class="card-body">
                <h4>Service</h4>
                <p>
                    {{ $service->name }}
                </p>

                <h4>Body type</h4>
                <p>
                    {{ $body_type->name }}
                </p>

                <h5 class="text-right">
                    <span>Total: Ksh</span>
                    {{ number_format($price->price) }}
                </h5>
            </div>
        </div>
    </div>
</div>

@endsection