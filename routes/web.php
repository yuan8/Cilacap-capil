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

Auth::routes();


Route::resource('/kecamatan','kecamatanController');
Route::resource('/provinsi','provinsiController');
Route::resource('/kabupaten','kabupatenController');
Route::resource('/desa','desaController');
Route::resource('/ktp','ktpController');





Route::get('/home', 'HomeController@index')->name('home');

Route::get('kabupaten-data/provinsi/{id}','Api\AddressController@kabupaten');
Route::get('kecamatan-data/kabupaten/{id}','Api\AddressController@kecamatan');
Route::get('desa-data/kecamatan/{id}','Api\AddressController@desa');

