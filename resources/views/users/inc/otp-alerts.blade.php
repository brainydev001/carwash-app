{{-- user has OTP --}}
@if (count($user->otps) > 0)

    {{-- OTP is active --}}
    @if ($user->otps()->latest()->first()->created_at == $user->otps()->latest()->first()->updated_at)
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading d-flex align-items-center">
                <span class="fe fe-24 fe-lock text-success"></span>
                <span class="pt-2 pl-1">
                    OTP Alert : #Active OTP
                </span>
            </h4>
            <p>
            <b>{{ $user->name }}</b> has an active <b>one time password (OTP)</b>
            </p>
            <div>
                <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#showOtpModal">
                    <span class="fe fe-14 fe-eye"></span>
                    <span class="pl-1">
                        View OTP
                    </span>
                </button>                
            </div>
        </div>
        
        {{-- modal : display otp --}}
        @livewire('modals.display',[
            'modalId' => 'showOtpModal',
            'title' => 'Active OTP',
            'content' => 'OTP: '.$user->otps()->latest()->first()->password
        ])
    @endif 

@endif


                