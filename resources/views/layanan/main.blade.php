@extends('main') @section('title', 'Layanan') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div
                        class="d-sm-flex d-block align-items-center justify-content-between mb-7"
                    >
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Layanan</h4>
                        </div>
                        <div>
                            <button
                                class="btn mb-1 d-block w-100 btn-outline-success waves-effect waves-light"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#tambahLayanan"
                            >
                                <i class="ti ti-plus fs-4 me-2"></i>
                                Tambah
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            class="table table-bordered border-black"
                            id="tableLayanan"
                        >
                            <thead class="bg-inverse text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Layanan</th>
                                    <th>Harga perKG</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cuci Setrika</td>
                                    <td>RP 5.000</td>
                                    <td>
                                        <div class="justify-content-center">
                                            <button
                                                class="btn btn-sm btn-danger"
                                                onclick="konfirmasiHapus()"
                                            >
                                                Hapus
                                            </button>
                                            <button
                                                class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ubahLayanan"
                                            >
                                                Ubah
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cuci Saja</td>
                                    <td>RP 3.000</td>
                                    <td>
                                        <div class="justify-content-center">
                                            <button
                                                class="btn btn-sm btn-danger"
                                            >
                                                Hapus
                                            </button>
                                            <button
                                                class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaksiUbah"
                                            >
                                                Ubah
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Setrika Saja</td>
                                    <td>RP 2.000</td>
                                    <td>
                                        <div class="justify-content-center">
                                            <button
                                                class="btn btn-sm btn-danger"
                                            >
                                                Hapus
                                            </button>
                                            <button
                                                class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaksiUbah"
                                            >
                                                Ubah
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Express 12 Jam</td>
                                    <td>RP 8.000</td>
                                    <td>
                                        <div class="justify-content-center">
                                            <button
                                                class="btn btn-sm btn-danger"
                                            >
                                                Hapus
                                            </button>
                                            <button
                                                class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#transaksiUbah"
                                            >
                                                Ubah
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layanan.tambah') @include('layanan.ubah') @endsection @push('scripts')
<script>
    $(function () {
        $("#tableLayanan").DataTable({
            responsive: true,
            pageLength: 5,
        });
    });

    function konfirmasiHapus() {
        Swal.fire({
            title: "Apakah kamu yakin ingin menghapus data ini?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus",
            cancelButtonText: "Jangan Hapus",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Data berhasil dihapus",
                    icon: "success",
                });
            }
        });
    }
</script>
@endpush
