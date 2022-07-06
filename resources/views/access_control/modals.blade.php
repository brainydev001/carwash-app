{{-- craete role modal --}}
<div class="modal fade" id="createRoleModal" tabindex="-1" role="dialog" aria-labelledby="createRoleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createRoleModalLabel">Create role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                @livewire('access-control.create-role')
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="createRoleForm">Create role</button>
            </div>
        </div>
    </div>
</div>

{{-- craete permission modal --}}
<div class="modal fade" id="craetePermissionModal" tabindex="-1" role="dialog" aria-labelledby="craetePermissionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="craetePermissionModalLabel">Create permission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                @livewire('access-control.create-permission')
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="createPermissionForm">Create permission</button>
            </div>
        </div>
    </div>
</div>
