<form action="{{ route('add-body-type',['id' => $service->id]) }}" id="addBodyTypeForm" method="POST">
    
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Select body type</label>
        <select class="form-control" name="body_type_id">
            <option disabled>Select body type</option>
            @foreach ($body_types as $body_type)
                <option value="{{ $body_type->id }}">{{ $body_type->name }}</option>    
            @endforeach
        </select>
        @error('body_type_id')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" name="price" class="form-control  @error('price') is-invalid @enderror" wire:model="price" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Role name">
        @error('price')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
</form>
