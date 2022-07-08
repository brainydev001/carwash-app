<form wire:submit.prevent="submit" id="createBodyTypeForm">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Body Type">
        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control  @error('name') is-invalid @enderror" wire:model="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
</form>
