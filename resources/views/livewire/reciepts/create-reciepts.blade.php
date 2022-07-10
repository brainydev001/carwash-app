<form wire:submit.prevent="submit" id="craeteRecieptForm">
    @csrf
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
    {{-- phone number --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Expenses</label>
        <div>
            @foreach ($expenses as $expense)
                <label for="{{ $expense->name }}">
                    {{ $expense->name }}
                    <input type="checkbox" name="expense" value="{{ $expense->id }}[]" class="pl-4 pt-2">
                </label>
            @endforeach
        </div>
        @error('expense')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
    
</form>
