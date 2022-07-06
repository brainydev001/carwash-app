<div class="text-right">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addToCartModal{{ $service->id }}">
        Add to cart
    </button>
</div>
<div class="modal fade" id="addToCartModal{{ $service->id }}" tabindex="-1" role="dialog"
    aria-labelledby="addToCartModal{{ $service->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToCartModal{{ $service->id }}Label">Select body type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @foreach ($service->bodyTypes as $body_type)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="bodyTypeRadio{{ $body_type->id }}"
                            value="option1">
                        <label class="form-check-label" for="bodyTypeRadio{{ $body_type->id }}">
                            {{ $body_type->name }}
                        </label>
                    </div>    
                @endforeach
                


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="addBodyTypeForm">Select body
                    type</button>
            </div>
        </div>
    </div>
</div>
