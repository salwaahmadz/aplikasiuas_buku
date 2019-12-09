<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pelanggan.indexp');
});

Route::get('/index', 'pelanggan@index');
Route::get('/katalog', 'pelanggan@katalog');

Route::get('/konfirmasi/{id_buku}', 'transaksi@konfirmasip');
Route::get('/invoice', 'transaksi@invoice');
Route::post('/proses', 'transaksi@prosestransaksi');

// ADMIN CON
Route::post('/tambahbuku', 'admin@tambahbuku');
Route::get('/cetak_pdf', 'admin@cetak_pdf');
// Route::get('/konfirmasip/', 'transaksi@konfirmasip');