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
                                <!-- table -->
                                <table class="table datatables" id="customersDataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Plate Number</th>
                                            <th>Served_by</th>
                                            <th>Created_by</th>
                                            <th>Updated_by</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KCA 1234 Z</td>
                                            <td>Staff Ngugi</td>
                                            <td>Ngugi</td>
                                            <td>Ngugi</td>
                                            <td>30 hrs ago</td>
                                            <td>
                                                <a href="{{ url('booking') }}">
                                                    <button type="button" class="btn btn-success p-2">View
                                                        <span class="fe fe-chevron-right fe-16 ml-2"></span>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- <div class="alert alert-warning">
                                    No Customer Bookings Available.
                                    <small>Click on the toolbar to perform any action</small>
                                </div> --}}
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div>
</div>