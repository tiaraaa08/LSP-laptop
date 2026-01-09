<!-- Modal -->
<div class="modal fade" id="ubahLayanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data Layanan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Harga per KG</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan Nama">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const harga = document.getElementById('hargatotal').value();
        const rupiah = new Intl.NumberFormat('id-ID').format(harga);
    </script>
@endpush