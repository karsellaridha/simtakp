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
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(["middleware"=>"auth"], function(){


Route::get('simtakp',function(){
	return view('home');
});

//Data User

//Data Mahasiswa
Route::get('mahasiswa/tambah', "MahasiswaController@tambah");
Route::post('mahasiswa', "MahasiswaController@prosesTambah");
Route::get('mahasiswa/', "MahasiswaController@dataMahasiswa");
Route::get('mahasiswa/edit/{mahasiswa}', "MahasiswaController@editMahasiswa");
Route::patch('mahasiswa/{mahasiswa}', "MahasiswaController@updateMahasiswa");
Route::get('mahasiswa/{mahasiswa}', "MahasiswaController@deleteMahasiswa");

//Data Dosen
Route::get('dosen/tambah', "DosenController@tambah");
Route::post('dosen', "DosenController@prosesTambah");
Route::get('dosen/', "DosenController@dataDosen");
Route::get('dosen/edit/{dosen}', "DosenController@editDosen");
Route::patch('dosen/{dosen}', "DosenController@updateDosen");
Route::get('dosen/{dosen}', "DosenController@deleteDosen");

//Data Alokasi Bimbingan Dosen
Route::get('kuotabimbingan', "KuotabimbinganController@index");
Route::get('kuotabimbingan/input/{nip}', "KuotabimbinganController@input");
Route::post('kuotabimbingan/input', "KuotabimbinganController@prosesInput");

//Pengajuan Pembimbing KP
Route::get('pengajuanpembkp', "PengajuanpembkpController@index");
Route::get('pengajuanpembkp/input', "PengajuanpembkpController@input");
Route::post('pengajuanpembkp/input', "PengajuanpembkpController@prosesInput");
Route::get('pengajuanpembkp/detail',"PengajuanpembkpController@detail");
Route::get('pengajuanpembkp/daftardosen',"PengajuanpembkpController@daftarDosen");

//Susun Pembimbing KP
Route::get('susunpembkp',"SusunpembkpController@index");
Route::post('susunpembkp/input',"SusunpembkpController@input");
Route::get('susunpembkp/lihatdata',"SusunpembkpController@lihatdata");
Route::get('susunpembkp/batal/{id}',"SusunpembkpController@batal");
Route::get('susunpembkp/simpan',"SusunpembkpController@simpan");

//Pengajuan syarat KP
Route::get('pengajuansyaratkp', "PengajuansyaratkpController@index");
Route::get('pengajuansyaratkp/input', "PengajuansyaratkpController@input");
Route::post('pengajuansyaratkp/input', "PengajuansyaratkpController@prosesInput");

//Verifikasi Syarat KP
Route::get('verifikasisyaratkp',"VerifikasisyaratkpController@index");
Route::get('verifikasisyaratkp/{id}/detail',"VerifikasisyaratkpController@detail");
Route::post('verifikasisyaratkp/{id}',"VerifikasisyaratkpController@verifikasi");

//Validasi Syarat KP
Route::get('validasisyaratkp',"ValidasisyaratkpController@index");
Route::get('validasisyaratkp/{id}/detail',"ValidasisyaratkpController@detail");
Route::post('validasisyaratkp/{id}',"ValidasisyaratkpController@validasi");

//Input Bimbingan KP
Route::get('bimbingankp/tambah',"BimbingankpController@tambah");
Route::post('bimbingankp', "BimbingankpController@prosesTambah");
Route::get('bimbingankp/', "BimbingankpController@dataBimbingankp");
Route::get('bimbingankp/edit/{bimbingankp}', "BimbingankpController@editBimbingankp");
Route::patch('bimbingankp/{bimbingankp}', "BimbingankpController@updateBimbingankp");
Route::get('bimbingankp/{bimbingankp}', "BimbingankpController@deleteBimbingankp");

//tampilkan mahasiswa yang dibimbing kp di page dosen
Route::get('mhsdibimbingkp',"BimbingankpController@dataMhsbimbingankp");
Route::get('mhsdibimbingkp/bimbingankp/{id}',"BimbingankpController@bimbingankp");

//input nilai kp dari mhs
Route::get('inputnilaikpmhs',"InputnilaikpController@index");
Route::get('inputnilaikpmhs/input',"InputnilaikpController@input");
Route::post('inputnilaikpmhs/input',"InputnilaikpController@prosesinput");

//input nilai kp dari mhs
Route::get('inputnilaikpdosen',"InputnilaikpController@index");
Route::get('inputnilaikpdosen/input',"InputnilaikpController@input");
Route::post('inputnilaikpdosen/input',"InputnilaikpController@prosesinput");

});