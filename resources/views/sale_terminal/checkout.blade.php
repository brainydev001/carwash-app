@extends('layouts.app')

@section('content')

{{-- alert --}}
@include('messages.alerts')

<div class="row mt-3 mb-3 container-fluid">
    <div class="col-md-8 p-2">

    </div>
    <div class="col-md-4 p-2">
        <div class="card">
            <div class="card-body">
                <h4>Service</h4>
                <p>Lorem ipsum dolor sit.</p>

                <h4>Body type</h4>
                <p>Lorem ipsum dolor sit.</p>

                <h5 class="text-right">
                    <span>Total: Ksh</span>
                    2,000
                </h5>
            </div>
        </div>
    </div>
</div>
    
@endsection