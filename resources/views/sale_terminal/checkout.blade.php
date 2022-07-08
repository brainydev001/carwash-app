@extends('layouts.app')

@section('content')

{{-- alert --}}
@include('messages.alerts')

<div class="row mt-3 mb-3 container-fluid">
    <div class="col-md-8 p-2">
        <div class="card">
            <div class="card-header">
                <h4>Checkout</h4>
            </div>
            <div class="card-body">
                
                {{-- checkout form --}}
                @livewire('sale-terminal.checkout-form',['price'=>$price])

            </div>
            <div class="card-footer text-right">
                <button form="saleTerminalCheckoutForm" class="btn btn-primary">
                    Confirm checkout
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-4 p-2">
        <div class="card">
            <div class="card-body">
                <h4>Service</h4>
                <p>
                    {{ $service->name }}
                </p>

                <h4>Body type</h4>
                <p>
                    {{ $body_type->name }}
                </p>

                <h5 class="text-right">
                    <span>Total: Ksh</span>
                    {{ number_format($price->price) }}
                </h5>
            </div>
        </div>
    </div>
</div>

@endsection