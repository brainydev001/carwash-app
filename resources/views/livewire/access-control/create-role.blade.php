<form wire:submit.prevent="submit" id="createRoleForm">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Role name">
        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Display name</label>
        <input type="text" class="form-control" wire:model="display_name" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="Display name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control" wire:model="description" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
