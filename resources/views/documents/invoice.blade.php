@extends('layouts.admin', [
    'title' => 'All Invoices',
    'breadcrumbs' => [
        'Documents' => url('documents/manager'),
    ],
])

@section('page')
    {{-- staff table --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                @if (count($invoices) > 0)
                                    <!-- table -->
                                    <table class="table datatables" id="invoiceDataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cudtomer Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Amount Due</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $key => $invoice)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <div>
                                                            @php
                                                                // get customer name
                                                                $name = DB::table('customers')->where([['id', '=', $invoice->customer_id]])
                                                                    ->pluck('name')->first();
                                                                    
                                                            @endphp
                                                            {{ $name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            @php
                                                                // get customer email
                                                                $email = DB::table('customers')->where([['id', '=', $invoice->customer_id]])
                                                                    ->pluck('email')->first();
                                                            @endphp
                                                            {{ $email }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            @php
                                                                // get customer phone_number
                                                                $phone_number = DB::table('customers')->where([['id', '=', $invoice->customer_id]])
                                                                    ->pluck('phone_number')->first();
                                                            @endphp
                                                            {{ $phone_number }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            {{ $invoice->code }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            {{ date('M-j-Y H:i', strtotime($invoice->created_at)) }}
                                                        </div>
                                                        <div>
                                                            {{ $invoice->created_at->diffForHumans() }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ url('single_invoice/'.$invoice->id) }}">View</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-warning">
                                        No invoices available
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div>

@endsection
