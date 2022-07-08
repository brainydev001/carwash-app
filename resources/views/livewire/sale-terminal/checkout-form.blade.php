<form action="{{ route('checkout',['price_id' => $price->id]) }}" id="saleTerminalCheckoutForm" class="row" method="POST">
    @csrf

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Plate number</label>
        <input type="text" name="plate_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Plate number">
        @error('plate_number')
            <small id="emailHelp" class="form-text text-danger">
                {{$message}}
            </small>
        @enderror

    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Full Name">
        @error('name')
            <small id="emailHelp" class="form-text text-danger">
                {{$message}}
            </small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Phone number</label>
        <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Plate number">
        @error('phone_number')
            <small id="emailHelp" class="form-text text-danger">
                {{$message}}
            </small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Full Name">
        <small id="emailHelp" class="form-text text-primary">
            optional
        </small>
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Car make</label>
        <input type="text" name="make" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Plate number">
        @error('make')
            <small id="emailHelp" class="form-text text-danger">
                {{$message}}
            </small>
        @enderror
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Car model</label>
        <input type="text" name="model" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Full Name">
        @error('model')
            <small id="emailHelp" class="form-text text-danger">
                {{$message}}
            </small>
        @enderror
    </div>

    <div class="form-group col-md-12">
        <label for="exampleInputEmail1">Special notes</label>
        <textarea name="notes" class="form-control" rows="3"></textarea>
        <small id="emailHelp" class="form-text text-primary">
            optional
        </small>
    </div>

</form>