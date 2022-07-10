
    {{-- name --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Staff name</label>
        <select class="form-control" name="name">
            <option disabled>Select Staff</option>
            @foreach ($staffs as $staff)
                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
            @endforeach
        </select>
        @error('staff_name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
    

