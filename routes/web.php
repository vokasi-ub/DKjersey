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

Route::get('dashboard', function () {
    return view('jersey');
});


Route::get('jersey2','jersey2_controller@index');
Route::get('/jersey2/tambah','jersey2_controller@tambah');
Route::post('/jersey2/store','jersey2_controller@store');
Route::get('/jersey2/edit/{id}','jersey2_controller@edit');
Route::post('/jersey2/update','jersey2_controller@update');





 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
