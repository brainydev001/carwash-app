@extends('layouts.admin',['title' => 'Documents'])

@section('page')

{{-- toolbar --}}
<div class="container-fluid">
     {{-- invoices --}}
     <a href="{{ url('invoices/manager') }}" class="btn btn-sm btn-primary mr-2">
        Invoices
    </a>
    {{-- invoices --}}
    <a href="{{ url('recieps/manager') }}" class="btn btn-sm btn-primary mr-2">
        Reciepts
    </a>
    {{-- commissions --}}
    <a href="{{ url('commissions/manager') }}" class="btn btn-sm btn-primary mr-2">
        Commissions
    </a>
</div>



@endsection