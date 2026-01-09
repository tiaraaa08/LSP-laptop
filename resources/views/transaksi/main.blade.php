@extends('main') @section('title', 'Transaksi') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div
                        class="d-sm-flex d-block align-items-center justify-content-between mb-7"
                    >
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Transaksi</h4>
                            <!-- <p class="card-subtitle">Best Employees</p> -->
                        </div>
                        <div>
                            <button
                                class="btn mb-1 d-block w-100 btn-outline-success waves-effect waves-light"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                            >
                                <i class="ti ti-plus fs-4 me-2"></i>
                                Tambah
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            class="table table-bordered border-dark"
                            id="myTable"
                        >
                            <thead class="text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Layanan</th>
                                    <th>Berat</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Keterangan</th>
                                    <th>Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-2-2024</td>
                                    <td>Warsito</td>
                                    <td>Cuci Saja</td>
                                    <td>5KG</td>
                                    <td>3.000</td>
                                    <td>15.000</td>
                                    <td>Selesai</td>
                                    <td>Lunas</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                        <button
                                            class="btn btn-sm btn-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#transaksiUbah"
                                        >
                                            Ubah
                                        </button>
                                        <!-- <div class="dropdown dropstart">
                                                <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="javascript:void(0)"><i
                                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>11-2-2024</td>
                                    <td>Warsini</td>
                                    <td>Cuci Setrika</td>
                                    <td>10KG</td>
                                    <td>5.000</td>
                                    <td>50.000</td>
                                    <td>Proses</td>
                                    <td>
                                        Belum Bayar
                                        <button class="btn btn-sm btn-success">
                                            Bayar
                                        </button>
                                    </td>
                                    <td>
                                        <button
                                            class="btn btn-sm btn-danger"
                                            onclick="konfirmasiHapus()"
                                        >
                                            Hapus
                                        </button>
                                        <button class="btn btn-sm btn-primary">
                                            Ubah
                                        </button>
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
@include('transaksi.tambah') @include('transaksi.edit') @endsection
@push('scripts')
<script>
    $(function () {
        $("#myTable").DataTable({
            responsive: true,
            pageLength: 5,
        });
    });

    function konfirmasiHapus() {
        Swal.fire({
            title: "Apakah kamu yakin untuk menghapus data ini?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus",
            cancelButtonText: "Jangan hapus",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Data Berhasil Dihapus!",
                    icon: "success",
                });
            }
        });
    }
</script>
@endpush
