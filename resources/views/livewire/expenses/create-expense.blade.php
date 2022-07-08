<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit.prevent="submit" id="craeteExpenseForm">
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
        {{-- type --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Expense Type</label>
            <input type="text" class="form-control  @error('type') is-invalid @enderror" wire:model="type" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="phone number">
            @error('type')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            </div>
        {{-- amount --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Amount</label>
            <input type="number" class="form-control  @error('amount') is-invalid @enderror" wire:model="amount" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="amount">
            @error('amount')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </form>
</div>

