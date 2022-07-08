{{-- craete staff modal --}}
<div class="modal fade" id="craeteStaffModal" tabindex="-1" role="dialog" aria-labelledby="craeteStaffModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="craeteStaffModal">Create Staff Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                @livewire('staff.create-staff')
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="craeteStaffForm">Create Staff Member</button>
            </div>
        </div>
    </div>
</div>