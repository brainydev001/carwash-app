{{-- info alert --}}
@if (session()->has('info-message'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <span class="fe fe-info fe-16 mr-2"></span>
    {{ session()->get('info-message') }} 
    <button type="button"
        class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endif

{{-- success alert --}}
@if (session()->has('success-message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="fe fe-check-circle fe-16 mr-2"></span>
    {{ session()->get('success-message') }} 
    <button type="button"
        class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endif

{{-- danger alert --}}
@if (session()->has('danger-message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span class="fe fe-alert-triangle fe-16 mr-2"></span>
    {{ session()->get('danger-message') }} 
    <button type="button"
        class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endif

{{-- warning alert --}}
@if (session()->has('warning-message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <span class="fe fe-alert-circle fe-16 mr-2"></span>
    {{ session()->get('warning-message') }} 
    <button type="button"
        class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>    
@endif

{{-- error alert --}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="fe fe-alert-triangle fe-16 mr-2"></span>
        {{ $error }} 
        <button type="button"
            class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>    
    @endforeach   
@endif


