<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');


Route::get('/barang','BarangController@index')->name('barang');
Route::get('/tambah_barang','BarangController@tambah_barang')->name('tambah_barang');
Route::post('/insert_barang','BarangController@insert_barang')->name('insert_barang');


Route::get('/transaksi','TransaksiController@index')->name('transaksi');
Route::post('/add_transaksi','TransaksiController@add_transaksi')->name('add_transaksi');

Route::get('/list_transaksi','TransaksiController@list_transaksi')->name('list_transaksi');
Route::get('/detail','TransaksiController@detail')->name('detail');
