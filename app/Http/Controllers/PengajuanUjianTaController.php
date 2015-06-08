<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\PengajuanSyaratUjianTa1;
use Auth;

/* 
	pengajuan ujian TA oleh mahasiswa
	fungsi : 
	- halaman daftar pengajuan : "berisi informasi pengajuan ujian yang pernah dilakukan TA1,TA2, atau ujian program"
	- halaman tambah pengajuan : "menambah pengajuan ujian"
	- edit : aktif jika masih dalam status "diajukan"
	- hapus : aktif jika masih dalam status "diajukan"
*/

class PengajuanUjianTaController extends Controller {

	public function getIndex(){
		$pengajuanUjian = PengajuanSyaratUjianTa1::where('nim','=',Auth::user()->mahasiswa->nim)->first();
		$pengajuanUjian2 = null;
		return view("pengajuan_ujian_ta.index")
		->with('pengajuanUjian',$pengajuanUjian)
		->with('pengajuanUjian2',$pengajuanUjian2);
	}

	public function getInput(){
		$pengajuanUjian = PengajuanSyaratUjianTa1::where('nim','=',Auth::user()->mahasiswa->nim)->count();

		return view("pengajuan_ujian_ta.tambah")
		->with('pengajuanUjian',$pengajuanUjian);
	} 

	public function postInput(Request $request){

		$data = $request->all();
		$data['status'] = 1;

		$pstu1 = PengajuanSyaratUjianTa1::firstOrNew(['nim'=>Auth::user()->mahasiswa->nim]);
		$pstu1->fill($data);
		$pstu1->save();

		return redirect('ujian_ta');
	}

	public function getEdit($jenis){
		
	}


} // end of class
 