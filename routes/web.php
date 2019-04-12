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


Route::get('dashboard', function () {
    return view('dashboard');
});


Route::resource('jersey', 'JerseyController');


//CRUD Tabel Jersey
Route::get('query1', 'jersey2_controller@cari')->name('mencari');
Route::get('jersey2','jersey2_controller@index');
Route::get('/jersey2/tambah','jersey2_controller@tambah');
Route::post('/jersey2/store','jersey2_controller@store');
Route::get('/jersey2/edit/{id}','jersey2_controller@edit');
Route::post('/jersey2/update','jersey2_controller@update')->name('editjersey');
Route::get('/jersey2/hapus/{id}','jersey2_controller@hapus');

//CRUD Tabel Pembeli

Route::get('pembeli','PembeliController@index1');
Route::get('/pembeli/tambah','PembeliController@tambahpembeli');
Route::post('/pembeli/store1','PembeliController@store1');
Route::get('/pembeli/editpembeli/{id}','PembeliController@editpembeli');
Route::post('/pembeli/update','PembeliController@update');
Route::get('/pembeli/hapus/{id}','PembeliController@hapus');


//CRUD Tabel Transaksi
Route::get('query', 'TransaksiController@search')->name('search');
Route::get('transaksi','TransaksiController@index2');
Route::get('/transaksi/tambah','TransaksiController@tambahtransaksi');
Route::post('/transaksi/addTransaksi','TransaksiController@addTransaksi');
Route::get('/transaksi/edittransaksi/{id}','TransaksiController@edittransaksi');
Route::post('/transaksi/update','TransaksiController@update');
Route::get('/transaksi/hapustransaksi/{id}','TransaksiController@hapustransaksi');



Route::get('maps', 'JerseyController@maps')->name('maps');

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

