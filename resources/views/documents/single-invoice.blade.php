@extends('layouts.admin', ['title' => 'Invoice'])

@section('page')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="row align-items-center mb-4">
                        <div class="col">
                            <h2 class="h5 page-title"><small
                                    class="text-muted text-uppercase">Invoice</small><br />{{ $invoice->number }}</h2>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary">Print</button>
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#craeteRecieptModal">Pay</button>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <div class="row mb-5">
                                <div class="col-12 text-center mb-4">
                                    <img src="{{ asset('images/minat.jpg') }}" class="navbar-brand-img brand-sm mx-auto mb-4"
                                        alt="...">
                                    <h2 class="mb-0 text-uppercase">Invoice</h2>
                                    <p class="text-muted"> Minat <br /> Nairobi. </p>
                                </div>
                                <div class="col-md-7">
                                    <p class="small text-muted text-uppercase mb-2">Invoice from</p>
                                    <p class="mb-4">
                                        <strong>
                                            @php
                                                // get customer name
                                                $name = DB::table('customers')
                                                    ->where([['id', '=', $invoice->customer_id]])
                                                    ->pluck('name')
                                                    ->first();
                                                
                                            @endphp
                                            {{ $name }}
                                        </strong><br /> Client<br /> @php
                                            // get customer phone_number
                                            $phone_number = DB::table('customers')
                                                ->where([['id', '=', $invoice->customer_id]])
                                                ->pluck('phone_number')
                                                ->first();
                                        @endphp
                                        {{ $phone_number }}<br />
                                        <br />
                                        @php
                                            // get customer email
                                            $email = DB::table('customers')
                                                ->where([['id', '=', $invoice->customer_id]])
                                                ->pluck('email')
                                                ->first();
                                        @endphp
                                        {{ $email }}
                                        <br />
                                    </p>
                                    <p>
                                        <span class="small text-muted text-uppercase">Invoice #</span><br />
                                        <strong>{{ $invoice->number }}</strong>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <p class="small text-muted text-uppercase mb-2">Invoice to</p>
                                    <p class="mb-4">
                                        <strong> Minat </strong><br /> Cashier<br /> {{ $invoice->number }}
                                        <br /> Nairobi<br /> <br />
                                    </p>
                                    <p>
                                        <small class="small text-muted text-uppercase">Due date</small><br />
                                        <strong>{{ $invoice->due_date }}</strong>
                                    </p>
                                </div>
                            </div> <!-- /.row -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" class="text-right">Service</th>
                                        <th scope="col" class="text-right">Body Type</th>
                                        <th scope="col" class="text-right">Ammout</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td> Description<br />
                                            <span class="small text-muted">
                                                {{ $invoice->notes }}
                                            </span>
                                        </td>
                                        <td class="text-right">
                                            @php
                                                // get customer email
                                                $service_id = DB::table('prices')
                                                    ->where([['id', '=', $invoice->price_id]])
                                                    ->pluck('service_id')
                                                    ->first();
                                                $service_name = DB::table('services')
                                                ->where([['id', '=', $service_id]])
                                                ->pluck('name')
                                                ->first();    
                                            @endphp
                                            {{ $service_name }}
                                        </td>
                                        <td class="text-right">
                                            @php
                                                // get customer email
                                                $body_type_id = DB::table('prices')
                                                    ->where([['id', '=', $invoice->price_id]])
                                                    ->pluck('body_type_id')
                                                    ->first();
                                                $body_type_name = DB::table('body_types')
                                                ->where([['id', '=', $body_type_id]])
                                                ->pluck('name')
                                                ->first();    
                                            @endphp
                                            {{ $body_type_name }}
                                        </td>
                                        <td class="text-right">{{ $invoice->code }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-2 text-center">
                                    <img src="{{ asset('images/minat.jpg') }}" class="navbar-brand-img brand-sm mx-auto my-4"
                                        alt="...">
                                </div>
                                <div class="col-md-5">
                                    <p class="text-muted small">
                                        <strong>Note :</strong> Click pay to complete the payment by selecting the expenses involved and staff member incharge 
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-right mr-2">
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Subtotal : </span>
                                            <strong>{{ $invoice->code }}</strong>
                                        </p>
                                        <p class="mb-2 h6">
                                            <span class="text-muted">Total : </span>
                                            <span>{{ $invoice->code }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </div>
    {{-- modals --}}
@include('documents.modals')

@endsection
