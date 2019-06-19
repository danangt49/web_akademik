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
    return view('/welcome');
});

//dosen
Route::get('dosen/data_dosen', 'DosenController@data');
Route::get('dosen/add_dosen', 'DosenController@add');
Route::post('dosen/save_dosen', 'DosenController@hasil');
Route::get('dosen/edit_dosen/{nip}/{nama}', 'DosenController@edit');
Route::post('dosen/hasil_dosen', 'DosenController@hasil');
Route::get('dosen/details_dosen/{nip}/{nama}', 'DosenController@details');

//mahasiswa
Route::get('mahasiswa/data_mahasiswa', 'mahasiswaController@data');

Route::get('mahasiswa/add_mahasiswa', 'mahasiswaController@add')->middleware('cek');
Route::post('mahasiswa/update_mahasiswa', 'mahasiswaController@hasil');

Route::get('mahasiswa/edit_mahasiswa/{id}', 'mahasiswaController@edit')->middleware('cek');
Route::post('mahasiswa/update_mahasiswa/{id}', 'mahasiswaController@hasiledit');

Route::get('mahasiswa/delete_mahasiswa/{id}', 'mahasiswaController@delete')->middleware('cek');
Route::get('mahasiswa/details_mahasiswa', 'mahasiswaController@details');

//Route::get('mahasiswa/details_mahasiswa/{input_nim}/{input_nama}', 'mahasiswaController@hasil');

//matkul
Route::get('matkul/data_matkul', 'MatkulController@data');
Route::get('matkul/add_matkul', 'MatkulController@add'); 
Route::post('matkul/save_matkul', 'MatkulController@hasil');
Route::get('matkul/edit_matkul/{kode}/{nama}', 'MatkulController@edit');
Route::post('matkul/hasil_matkul', 'MatkulController@hasil');
Route::get('matkul/details_matkul/{kode}/{nama}', 'MatkulController@hasil');
Auth::routes();

Route::get('/home', 'HomeController@index');
