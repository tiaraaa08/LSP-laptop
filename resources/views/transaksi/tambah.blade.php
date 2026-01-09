<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Transaksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-5">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="col-7">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan Nama">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Layanan</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Layanan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="" class="form-label">Masukkan Berat</label>
                        <div class="input-group">
                            <input type="number" class="form-control">
                            <span class="input-group-text">KG</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="" class="form-label">Harga Total</label>
                        <div class="input-group">
                            <input type="number" disabled id="hargatotal" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                        <select disabled class="form-select" aria-label="Default select example">
                            <option selected value="proses"> Proses </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Pembayaran</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="lunas"> Lunas </option>
                            <option selected value="belum bayar"> Belum Bayar </option>
                        </select>
                    </div>
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