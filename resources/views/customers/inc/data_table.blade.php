<div class="container-fluid m-4">
    {{-- users table --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                @if (count($customers) > 0)
                                <!-- table -->
                                <table class="table datatables" id="customersDataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Plate Number</th>
                                            <th>Served_by</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $key => $customer)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone_number }}</td>
                                            <td>{{ $customer->plate_number }}</td>
                                            <td>Staff Ngugi</td>
                                            <td>30 hrs ago</td>
                                            <td>
                                                <a href="{{ url('customer/bookings') }}">
                                                    <button type="button" class="btn btn-success p-2">View
                                                        <span class="fe fe-chevron-right fe-16 ml-2"></span>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="alert alert-warning">
                                    No Customer Bookings Available.
                                    <small>Click on the toolbar to perform any action</small>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div>
</div>