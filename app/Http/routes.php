<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('dosenmatakuliah','Dosen_MatakuliahController@awal');
Route::get('dosenmatakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('jadwalmatakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwalmatakuliah/tambah','Jadwal_MatakuliahController@tambah');


Route::get('/', function () {
    return view('welcome');
});
Route::get('public', function () {
    return view('biodata');
});

Route::auth();
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return("hallo $pengguna");
});
Route::get('public', function () {
    return ('hallo');
});
