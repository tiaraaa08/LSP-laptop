<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/layanan', function () {
    return view(view: 'layanan.main');
});

Route::get('/transaksi', function () {
    return view('transaksi.main');
});

Route::get('/struk', function () {
    return view('struk');
});
