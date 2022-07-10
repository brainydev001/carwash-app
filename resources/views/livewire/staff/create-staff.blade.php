<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit.prevent="submit" id="craeteStaffForm">
        @csrf
        {{-- name --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="name">
            @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        {{-- phone number --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control  @error('phonenumber') is-invalid @enderror" wire:model="phonenumber" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="phone number">
            @error('phonenumber')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        {{-- email --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror" wire:model="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="email">
            @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        {{-- commission --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Commission</label>
            <select class="form-control  @error('commission') is-invalid @enderror" wire:model="commission" id="exampleFormControlTextarea1">
                <option disabled>Commission in %</option>
                <option value="5">5%</option>
                <option value="20">20%</option>
                <option value="25">25%</option>
            </select>
            @error('commission')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </form>
</div>
