<div class="text-right">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addToCartModal{{ $service->id }}">
        Book
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
                <div class="row">
                    
                    @foreach ($service->bodyTypes as $body)
                        <div class="p-2">
                            <a href="{{ url('add-to-cart/' . $service->id . '/' . $body->id) }}"
                                class="btn btn-secondary">
                                {{ $body->name }}
                            </a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
