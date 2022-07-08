{{-- staff table --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            @if (count($staffs) > 0)
                                <!-- table -->
                                <table class="table datatables" id="staffDataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $key => $staff)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div>
                                                        {{ $staff->name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        {{ $staff->email }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        {{ $staff->phonenumber }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <div>
                                                        {{ date('M-j-Y H:i', strtotime($staff->created_at)) }}
                                                    </div>
                                                    <div>
                                                        {{ $staff->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="#">View</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-warning">
                                    No users to show
                                </div>
                            @endif
                        </div>
                    </div>
                </div> <!-- simple table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
