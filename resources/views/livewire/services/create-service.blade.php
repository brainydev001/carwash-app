<form wire:submit.prevent="submit" id="createServiceForm" class="row">
    @csrf
    <div class="form-group col-12">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name"
            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Service name">
        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    {{-- price --}}
    <div class="form-group col-12">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" class="form-control  @error('price') is-invalid @enderror" wire:model="price"
            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Service name">
        @error('price')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group col-12">
        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control  @error('price') is-invalid @enderror" wire:model="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('price')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
</form>
