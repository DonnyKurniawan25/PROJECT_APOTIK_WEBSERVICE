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
    return view('welcome');
});

Route::get('/ada', function () {
    return view('layout.app');
});

Route::resource('/produk', 'produkController');
Route::resource('/jenis', 'jenisController');
Route::resource('/karyawan', 'karyawanController');
Route::resource('/detail', 'detailController');
Route::resource('/penjualan', 'penjualanController');
Route::resource('/produk', 'produkController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
