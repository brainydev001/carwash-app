{{-- users table --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            @if (count($users) > 0)
                                <!-- table -->
                                <table class="table datatables" id="usersDataTable">
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
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td> 
                                                    <div>
                                                        {{ $user->name }}
                                                    </div>
                                                    <div>
                                                        {{ '@'.$user->username }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        {{ $user->email }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        {{ $user->phone_number }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <div>
                                                        {{ date('M-j-Y H:i',strtotime($user->created_at)) }}
                                                    </div>
                                                    <div>
                                                        {{ $user->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ url('user/'.$user->username) }}">View</a>
                                                        {{-- <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a> --}}
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