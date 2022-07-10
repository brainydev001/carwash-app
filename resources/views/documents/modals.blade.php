<form action="{{ route('store' ,['id' => $invoice->id]) }}" method="post">
    @csrf
    {{-- craete expense modal --}}
    <div class="modal fade" id="craeteRecieptModal" tabindex="-1" role="dialog" aria-labelledby="craeteRecieptModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="craeteRecieptForm">Create Reciept</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @livewire('reciepts.create-reciepts')

                </div>
                <div class="border-bottom text-center">
                    Choose payment method
                </div>
                <div class="modal-footer flex">
                    <div>
                        <button type="submit" class="btn btn-primary">Mpesa</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Cash</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
