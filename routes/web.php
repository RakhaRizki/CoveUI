<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/create/customer', function () {
    return view('create_customer');
});

Route::get('/create/pesanan', function () {
    return view('create_pesanan');
});

Route::get('/barangpesanan', function () {
    return view('barang_pesanan');
});

Route::get('/edit/barangpesanan', function () {
    return view('edit_barang_pesanan');
});

Route::get('/create/barangpesanan', function () {
    return view('create_barang_pesanan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});




