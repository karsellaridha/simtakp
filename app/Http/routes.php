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

Route::group(["middleware"=>"cekIzinAksesHalaman"], function(){

//Pengajuan Pembimbing KP
Route::get('pengajuanpembkp', "PengajuanpembkpController@index");
Route::get('pengajuanpembkp/input', "PengajuanpembkpController@input");
Route::post('pengajuanpembkp/input', "PengajuanpembkpController@prosesInput");
Route::get('pengajuanpembkp/detail',"PengajuanpembkpController@detail");
Route::get('pengajuanpembkp/daftardosen',"PengajuanpembkpController@daftarDosen");



//Pengajuan syarat KP
Route::get('pengajuansyaratkp', "PengajuansyaratkpController@index");
Route::get('pengajuansyaratkp/input', "PengajuansyaratkpController@input");
Route::post('pengajuansyaratkp/input', "PengajuansyaratkpController@prosesInput");

//Input Bimbingan KP
Route::get('bimbingankp/tambah',"BimbingankpController@tambah");
Route::post('bimbingankp', "BimbingankpController@prosesTambah");
Route::get('bimbingankp/', "BimbingankpController@dataBimbingankp");
Route::get('bimbingankp/edit/{bimbingankp}', "BimbingankpController@editBimbingankp");
Route::patch('bimbingankp/{bimbingankp}', "BimbingankpController@updateBimbingankp");
Route::get('bimbingankp/{bimbingankp}', "BimbingankpController@deleteBimbingankp");


//input nilai kp dari mhs
Route::get('inputnilaikpmhs',"InputnilaikpController@index");
Route::get('inputnilaikpmhs/input',"InputnilaikpController@input");
Route::post('inputnilaikpmhs/input',"InputnilaikpController@prosesinput");

//Pengajuan Pembimbing TA
Route::get('pengajuanpembta', "PengajuanpembtaController@index");
Route::get('pengajuanpembta/input', "PengajuanpembtaController@input");
Route::post('pengajuanpembta/input', "PengajuanpembtaController@prosesInput");
Route::get('pengajuanpembta/detail',"PengajuanpembtaController@detail");
Route::get('pengajuanpembta/daftardosen/{pemb}',"PengajuanpembtaController@daftarDosen");


//Pengajuan syarat TA
Route::get('pengajuansyaratta', "PengajuansyarattaController@index");
Route::get('pengajuansyaratta/input', "PengajuansyarattaController@input");
Route::post('pengajuansyaratta/input', "PengajuansyarattaController@prosesInput");

//Input Bimbingan TA
Route::get('bimbinganta/tambah/{nip}',"BimbingantaController@tambah");
Route::post('bimbinganta', "BimbingantaController@prosesTambah");
Route::get('bimbinganta/', "BimbingantaController@dataBimbinganta");
Route::get('bimbinganta/edit/{bimbinganta}', "BimbingantaController@editBimbinganta");
Route::patch('bimbinganta/{bimbinganta}', "BimbingantaController@updateBimbinganta");
Route::get('bimbinganta/{bimbinganta}', "BimbingantaController@deleteBimbinganta");

Route::controller('ujian_ta','PengajuanUjianTaController');

});

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

//Susun Pembimbing KP
Route::get('susunpembkp',"SusunpembkpController@index");
Route::post('susunpembkp/input',"SusunpembkpController@input");
Route::get('susunpembkp/lihatdata',"SusunpembkpController@lihatdata");
Route::get('susunpembkp/batal/{id}',"SusunpembkpController@batal");
Route::get('susunpembkp/simpan',"SusunpembkpController@simpan");
Route::get('susunpembkp/printreguler',"SusunpembkpController@printReguler");
Route::get('susunpembkp/printbilingual',"SusunpembkpController@printBilingual");

//Verifikasi Syarat KP
Route::get('verifikasisyaratkp',"VerifikasisyaratkpController@index");
Route::get('verifikasisyaratkp/{id}/detail',"VerifikasisyaratkpController@detail");
Route::post('verifikasisyaratkp/{id}',"VerifikasisyaratkpController@verifikasi");
Route::get('verifikasisyaratkp/{id}/cetakverifikasi',"VerifikasisyaratkpController@cetakVerifikasi");

//tampilkan mahasiswa yang dibimbing kp di page dosen
Route::get('mhsdibimbingkp',"BimbingankpController@dataMhsbimbingankp");
Route::get('mhsdibimbingkp/bimbingankp/{id}',"BimbingankpController@bimbingankp");
Route::get('mhsdibimbingkp/detail/{nim}',"BimbingankpController@detail");
Route::get('mhsdibimbingkp/cetak_penilaian_dosen/{nim}',"BimbingankpController@cetakPenilaiandosen");
Route::get('mhsdibimbingkp/cetak_rekap_penilaian/{nim}',"BimbingankpController@cetakRekappenilaian");

//input nilai kp dari dosen
Route::get('inputnilaikpdosen/{nim}/detail',"InputnilaikpController@detail");
Route::get('inputnilaikpdosen/{nim}',"InputnilaikpController@inputdosen");
Route::post('inputnilaikpdosen/{nim}',"InputnilaikpController@prosesinputdosen");

//Susun Pembimbing TA
Route::get('susunpembta',"SusunpembtaController@index");
Route::post('susunpembta/input',"SusunpembtaController@input");
Route::get('susunpembta/lihatdata',"SusunpembtaController@lihatdata");
Route::get('susunpembta/batal/{id}',"SusunpembtaController@batal");
Route::get('susunpembta/simpan',"SusunpembtaController@simpan");


//Verifikasi Syarat TA
Route::get('verifikasisyaratta',"VerifikasisyarattaController@index");
Route::get('verifikasisyaratta/{id}/detail',"VerifikasisyarattaController@detail");
Route::post('verifikasisyaratta/{id}',"VerifikasisyarattaController@verifikasi");
Route::get('verifikasisyaratta/{id}/cetakverifikasi',"VerifikasisyarattaController@cetakVerifikasi");

//tampilkan mahasiswa yang dibimbing ta di page dosen
Route::get('mhsdibimbingta',"BimbingantaController@dataMhsbimbinganta");
Route::get('mhsdibimbingta/bimbinganta/{id}',"BimbingantaController@bimbinganta");
Route::get('mhsdibimbingta/penilaian/{nim}',"BimbingantaController@penilaian");
Route::post('mhsdibimbingta/penilaian/{nim}',"BimbingantaController@penilaianProses");

//tampilkan mahasiswa yang dibimbing ta di page dosen
Route::get('mhsdiujita',"BimbingantaController@dataMhsujianta");
Route::get('mhsdiujita/bimbinganta/{id}',"BimbingantaController@bimbinganta");
Route::get('mhsdiujita/detail/{nim}',"BimbingantaController@detail");
Route::get('mhsdiujita/penilaian/{nim}',"BimbingantaController@penilaian");
Route::post('mhsdiujita/penilaian/{nim}',"BimbingantaController@penilaianProses");


// penilaian kp
Route::get('penilaian/detail/{sebagai}/{nim}', "PenilaianTaController@detail");
Route::get('penilaian/{sebagai}/{jenis}/{nim}', "PenilaianTaController@penilaian");
Route::post('penilaian/{sebagai}/{jenis}/{nim}', "PenilaianTaController@penilaianProses");

// verifikasi pengajuan ujian TA
Route::controller('verifikasi_ujian/ta1','VerifikasiUjianTa1Controller');
Route::controller('verifikasi_ujian/ta2','VerifikasiUjianTa2Controller');

// susun jadawal TA
Route::controller('susunjadwalta','SusunJadwalTaController');

//Laporan
Route::get('laporan_kp',function(){
	return view('laporan_kp/index');
});

Route::get('laporan_kp/laporan',"BimbingankpController@dataMhsbimbingankp");

Route::get('laporan_ta',function(){
	return view('laporan_ta/index');
});

Route::get('laporan_ta/laporan',"BimbingantaController@dataMhsbimbinganta");


});