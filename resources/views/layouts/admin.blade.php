@extends('layouts.app')

{{-- css --}}
@section('appcss')
@livewireStyles
{{-- datatables --}}
<link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
{{-- top nav --}}
@livewire('navigation.top-nav')

{{-- side nav --}}
@livewire('navigation.side-nav')

{{-- main --}}
<main role="main" class="main-content">
    {{-- alerts --}}
    @include('messages.alerts')
    
    {{-- title and breadcrumbs --}}
    <div class="container-fluid mb-3">
        <div class="d-flex justify-content-between align-items-center">
            {{-- title --}}
            <div>
                <h4 class="m-0">
                    {{ $title ?? '-add page title-' }}
                </h4>
            </div>
            {{-- breadcrumbs --}}
            <div>
                @isset($breadcrumbs)
                    @foreach ($breadcrumbs as $name => $url)
                        <a href="{{ $url }}">
                            {{ $name }}
                        </a>
                        /
                    @endforeach
                    {{-- page title --}}
                    {{ $title ?? '-add page title-' }}
                @endisset
            </div>
        </div>
    </div>
    {{-- body --}}
    <div class="container-fluid">
        {{-- yield --}}
        @yield('page')
    </div>
</main>

@endsection

{{-- js --}}
@section('appjs')
@livewireScripts
{{-- datatables --}}
<script src='{{ asset('admin/js/jquery.dataTables.min.js') }}'></script>
<script src='{{ asset('admin/js/dataTables.bootstrap4.min.js') }}'></script>
{{-- custom js --}}
<script src="{{ asset('admin/custom/js/tables.js') }}"></script>
@endsection