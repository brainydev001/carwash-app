@extends('layouts.admin', [
    'title' => 'All Commissions',
    'breadcrumbs' => [
        'Documents' => url('documents/manager'),
    ],
])

@section('page')
{{-- alert --}}
@include('messages.alerts')
    {{-- staff table --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                @if (count($commissions) > 0)
                                    <!-- table -->
                                    <table class="table datatables" id="invoiceDataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Staff Name</th>
                                                <th>Amount paid</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($commissions as $key => $commission)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <div>
                                                            @php
                                                                // get customer name
                                                                $name = DB::table('staff')->where([['id', '=', $commission->staff_id]])
                                                                    ->pluck('name')->first();
                                                                    
                                                            @endphp
                                                            {{ $name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            {{ $commission->amount }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            {{ date('M-j-Y H:i', strtotime($commission->created_at)) }}
                                                        </div>
                                                        <div>
                                                            {{ $commission->created_at->diffForHumans() }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-warning">
                                        No commissions paid
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
