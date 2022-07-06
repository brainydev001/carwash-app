@extends('layouts.app')

@section('content')
    {{-- alert --}}
    @include('messages.alerts')

    <div class="row container-fluid">
        <div class="col-md-8">
            <div class="mt-3 mb-3">
                <a href="{{ url('dashboard') }}" class="">
                    Dashboard
                </a>
            </div>
            {{-- search --}}
            <div class="form-group p-2">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search services">
            </div>
            {{-- items --}}
            <div class="row">
                {{-- item --}}
                @foreach ($services as $service)
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <div class="card-header">
                                {{ $service->name }}
                            </div>
                            <div class="card-body">
                                {{ $service->description }}
                            </div>
                            <div class="card-footer">
                                @livewire('sale-terminal.add-to-cart-modal', ['service' => $service], key($service->id))
                            </div>
                        </div>
                    </div>    
                @endforeach
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
@endsection
