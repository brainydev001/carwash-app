@extends('layouts.admin', ['title' => 'Dashboard'])

@section('page')
    {{-- widgets --}}

    <div class="container-fluid mt-4">
        <div class="row mb-4">
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow bg-primary text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary-light">
                                    <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- booking --}}
                            <div class="col pr-0">
                                <a href="{{ url('sale-terminal') }}">
                                    <h4 class="small text-white mb-0">Make Booking</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow bg-success text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-users text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- total bookings --}}
                            <a href="{{ url('staff/manager') }}">
                                <div class="col pr-0">
                                    <p class="small text-white mb-0">Staff </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow bg-white text-dark">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-user text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- commission --}}
                            <div class="col">
                                <h4 class="small text-white mb-0">Commission</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow text-white bg-warning">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-activity text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- loyolty points --}}
                            <div class="col">
                                <h4 class="small text-white mb-0">Loyalty Points</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary-light">
                                    <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- monthly sales --}}
                            <div class="col pr-0">
                                <p class="small text-white mb-0">Monthly Sales(ksh)</p>
                                <span class="h3 mb-0 text-white">0</span>
                                <span class="small text-muted">+0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                </span>
                            </div>
                            {{-- total bookings --}}
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Total Bookings</p>
                                <span class="h3 mb-0">0</span>
                                <span class="small text-success">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-users text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Total Customers</p>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <span class="h3 mr-2 mb-0">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-activity text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Reports</p>
                                <span class="h4 mb-0">
                                    <i class="fe-layers"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
