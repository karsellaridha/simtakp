<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\PengajuanSyaratUjianTa1;
use App\Pengajuansyaratta;
use Auth;
use App\VerifikasiUjianTa1;


class VerifikasiUjianTa1Controller extends Controller {

	public function getIndex(){
		$pengajuanUjian = PengajuanSyaratUjianTa1::where('created_at','like',"%2015%")->get();

		return view("verifikasiujianta1.index")
		->with('pengajuanUjian',$pengajuanUjian);
	}

	public function getInput($nim){
		$pengajuanUjian = PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();
		$psta=Pengajuansyaratta::where('nim','=',$nim)->first();
		$verifikasi = VerifikasiUjianTa1::where('nim','=',$nim)->first();
		return view("verifikasiujianta1.detail")
		->with('pengajuanUjian',$pengajuanUjian)
		->with('psta',$psta)
		->with('verifikasi',$verifikasi);
	} 

	public function postInput($nim, Request $request){

		$field=[
	'ksm',
	'spp',
	'dkn',
	'ktm',
	'form_konsultasi',
	'rekomendasi_sidang',
	'tugas_akhir_1',
	'sk_pembimbing_ta'
	];;
		$checkable=array();
		$hitung=0;

		foreach($field as $data){
			if($request->has($data)){
				$hitung++;
				$checkable[$data]="ya";
			}
			else{
				$checkable[$data]="tidak";
			}
		}

		$verifikasi=VerifikasiUjianTa1::firstOrNew(["nim"=>$nim]);
		$verifikasi->fill($checkable);
		$verifikasi->save();
		if($hitung==8){
			PengajuanSyaratUjianTa1::where('nim','=',$nim)->update(["status"=>2]);
		} 


		return redirect('verifikasi_ujian/ta1');
	}

	public function cetakVerifikasi($id){
			
		$psta=Pengajuansyaratta::findOrFail($id);
		$verifikasi = VerifikasiUjianTa1::findOrFail($id);
		$pengajuanUjian = PengajuanSyaratUjianTa1::findOrFail($id);
		return view('form_cetak.cetak_verifikasi_uta1')->with('verifikasi',$verifikasi)->with('psta',$psta)->with('pengajuanUjian',$pengajuanUjian);
	}

} // end of class
 