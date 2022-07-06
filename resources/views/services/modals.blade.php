{{-- craete service modal --}}
<div class="modal fade" id="craeteServiceModal" tabindex="-1" role="dialog" aria-labelledby="craeteServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="craeteServiceModalLabel">Create service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                @livewire('services.create-service')
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="createServiceForm">Create service</button>
            </div>
        </div>
    </div>
</div>

{{-- craete body type modal --}}
<div class="modal fade" id="craeteBodyTypeModal" tabindex="-1" role="dialog" aria-labelledby="craeteBodyTypeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="craeteBodyTypeModalLabel">Create body type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                @livewire('services.create-body-type')
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="createBodyTypeForm">Create body type</button>
            </div>
        </div>
    </div>
</div>

{{-- add body type to service modal --}}
<div class="modal fade" id="addBodyTypeModal" tabindex="-1" role="dialog" aria-labelledby="addBodyTypeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBodyTypeModalLabel">Add body type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @isset($service)
                    @livewire('services.add-body-type',['service' => $service])    
                @endisset
                
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="addBodyTypeForm">Add body type</button>
            </div>
        </div>
    </div>
</div>