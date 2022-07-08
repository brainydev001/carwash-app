{{-- users table --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            @if (count($expenses) > 0)
                                <!-- table -->
                                <table class="table datatables" id="expensesDataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($expenses as $key => $expense)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>
                                                <td>{{ $expense->name }}</td>
                                                <td>
                                                    {{ $expense->type }}
                                                </td>
                                                <td>
                                                    {{ $expense->amount }}
                                                </td>
                                                <td class="text-right">
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">View</a>
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
                                    No services to show
                                </div>
                            @endif
                        </div>
                    </div>
                </div> <!-- simple table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
