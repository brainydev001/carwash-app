@extends('layouts.app')

@section('content')
    {{-- alert --}}
    @include('messages.alerts')

    <form action="{{ route('checkout',['price_id' => $price->id]) }}" method="post">
        @csrf
        <div class="row mt-3 mb-3 container-fluid">
            <div class="col-md-8 p-2 ">

                @livewire('sale-terminal.checkout-form')

            </div>
            <div class="col-md-4 p-2 mt-4">
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
        <div class="float-right m-3">
            <button class="btn btn-primary">
                Checkout
            </button>
        </div>
    </form>
@endsection
