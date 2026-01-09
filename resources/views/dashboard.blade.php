@extends('main') @section('title', 'Beranda') @section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card border-bottom border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-medium text-info mb-0">
                                        Jumlah Layanan
                                    </h6>
                                    <h4 class="fs-7">5</h4>
                                </div>
                                <span class="text-info display-6">
                                    <i class="ti ti-file-text"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-bottom border-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-medium text-primary mb-0">
                                        Transaksi Baru
                                    </h6>
                                    <h4 class="fs-7">3</h4>
                                </div>
                                <span class="text-primary display-6">
                                    <i class="ti ti-clipboard"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-bottom border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-medium text-success mb-0">
                                        Sedang Diproses
                                    </h6>
                                    <h4 class="fs-7">2</h4>
                                </div>
                                <div class="ms-auto">
                                    <span class="text-success display-6">
                                        <i class="ti ti-credit-card"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-bottom border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="fw-medium text-danger mb-0">
                                        Belum Dibayar
                                    </h6>
                                    <h4 class="fs-7">1</h4>
                                </div>
                                <span class="text-danger display-6">
                                    <i class="ti ti-users"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-lg-8 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                <div class="mb-3 mb-sm-0">
                                    <h5 class="card-title fw-semibold">
                                        Sales Overview
                                    </h5>
                                </div>
                                <div>
                                    <select class="form-select">
                                        <option value="1">March 2025</option>
                                        <option value="2">April 2025</option>
                                        <option value="3">May 2025</option>
                                        <option value="4">June 2025</option>
                                    </select>
                                </div>
                            </div>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-9 fw-semibold">
                                        Yearly Breakup
                                    </h5>
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h4 class="fw-semibold mb-3">
                                                $36,358
                                            </h4>
                                            <div class="d-flex align-items-center mb-3">
                                                <span
                                                    class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-up-left text-success"></i>
                                                </span>
                                                <p class="text-dark me-1 fs-3 mb-0">
                                                    +9%
                                                </p>
                                                <p class="fs-3 mb-0">last year</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="me-4">
                                                    <span
                                                        class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                                    <span class="fs-2">2025</span>
                                                </div>
                                                <div>
                                                    <span
                                                        class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                                    <span class="fs-2">2024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="d-flex justify-content-center">
                                                <div id="breakup"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row alig n-items-start">
                                        <div class="col-8">
                                            <h5 class="card-title mb-9 fw-semibold">
                                                Monthly Earnings
                                            </h5>
                                            <h4 class="fw-semibold mb-3">$6,820</h4>
                                            <div class="d-flex align-items-center pb-1">
                                                <span
                                                    class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-arrow-down-right text-danger"></i>
                                                </span>
                                                <p class="text-dark me-1 fs-3 mb-0">
                                                    +9%
                                                </p>
                                                <p class="fs-3 mb-0">last year</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-currency-dollar fs-6"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="earning"></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                                <div class="">
                                    <h4 class="card-title fw-semibold">
                                       Transaksi Terbaru
                                    </h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle text-nowrap table-bordered border-dark" id="dashboardTable">
                                    <thead>
                                        <tr class="text-muted fw-semibold">
                                            <th scope="col">
                                                No
                                            </th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Layanan</th>
                                            <th scope="col">Berat</th>
                                            <th scope="col">Tanggal Transaksi</th>
                                            <th scope="col">Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-top">
                                        <tr>
                                            <td>
                                               1
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Warsini</p>
                                            </td>
                                            <td>
                                                <span
                                                    class="mb-0 fs-3">Cuci Setrika</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 10KG
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 12 Feb 2024
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 Belum Bayar
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               1
                                            </td>
                                            <td>
                                                <p class="mb-0 fs-3">Warsito</p>
                                            </td>
                                            <td>
                                                <span
                                                    class="mb-0 fs-3">Cuci Saja</span>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 6KG
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 11 Feb 2024
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-3 text-dark mb-0">
                                                 Lunas
                                                </p>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('template/assets/images/products/s4.jpg') }}"
                                    class="card-img-top rounded-0" alt="..." /></a>
                            <a href="javascript:void(0)"
                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                    class="ti ti-basket fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-semibold fs-4 mb-0">
                                    $50
                                    <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('template/assets/images/products/s5.jpg') }}"
                                    class="card-img-top rounded-0" alt="..." /></a>
                            <a href="javascript:void(0)"
                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                    class="ti ti-basket fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-semibold fs-4 mb-0">
                                    $650
                                    <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('template/assets/images/products/s7.jpg') }}"
                                    class="card-img-top rounded-0" alt="..." /></a>
                            <a href="javascript:void(0)"
                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                    class="ti ti-basket fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-semibold fs-4 mb-0">
                                    $150
                                    <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="{{ asset('template/assets/images/products/s11.jpg') }}"
                                    class="card-img-top rounded-0" alt="..." /></a>
                            <a href="javascript:void(0)"
                                class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                    class="ti ti-basket fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-semibold fs-4 mb-0">
                                    $285
                                    <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)"><i
                                                class="ti ti-star text-warning"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">
                    Design and Developed by
                    <a href="https://adminmart.com/" target="_blank"
                        class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>
                </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $("#dashboardTable").DataTable({
                responsive: true,
                pageLength: 5,
            });
        });
    </script>
@endpush