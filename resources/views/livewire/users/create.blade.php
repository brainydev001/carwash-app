<div class="container-fluid">
    <div class="p-2 mx-auto col-md-8">

        <form wire:submit.prevent="submit">

            {{-- row --}}
            <div class="row">
                {{-- name --}}
                <div class="col-md-6 p-3">
                    <label>Name</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror">
                    @error('name') 
                        <span class="text-danger">
                            {{ $message }}
                        </span> 
                    @enderror
                </div>
                {{-- username --}}
                <div class="col-md-6 p-3">
                    <label>Username</label>
                    <input type="text" wire:model="username" class="form-control @error('username') is-invalid @enderror">
                    @error('username') 
                        <span class="text-danger">
                            {{ $message }}
                        </span> 
                    @enderror
                </div>
            </div>

            {{-- row --}}
            <div class="row">
                {{-- phone number --}}
                <div class="col-md-6 p-3">
                    <label>Phone number</label>
                    <input type="text" wire:model="phone_number" class="form-control @error('phone_number') is-invalid @enderror">
                    @error('phone_number') 
                        <span class="text-danger">
                            {{ $message }}
                        </span> 
                    @enderror
                </div>
                {{-- email --}}
                <div class="col-md-6 p-3">
                    <label>Email</label>
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email') 
                        <span class="text-danger">
                            {{ $message }}
                        </span> 
                    @enderror
                </div>
            </div>

            {{-- submit btn --}}
            <button class="btn btn-primary btn-lg w-100 mt-3">Create</button>

        </form>

    </div>
</div>
