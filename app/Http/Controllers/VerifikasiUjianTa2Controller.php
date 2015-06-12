<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\PengajuanSyaratUjianTa2;
use App\Pengajuansyaratta;
use Auth;
use App\VerifikasiUjianTa2;


class VerifikasiUjianTa2Controller extends Controller {

	public function getIndex(){
		$pengajuanUjian = PengajuanSyaratUjianTa2::where('created_at','like',"%2015%")->get();

		return view("verifikasiujianta2.index")
		->with('pengajuanUjian',$pengajuanUjian);
	}

	public function getInput($nim){
		$pengajuanUjian = PengajuanSyaratUjianTa2::where('nim','=',$nim)->first();
		$psta=Pengajuansyaratta::where('nim','=',$nim)->first();
		$verifikasi = VerifikasiUjianTa2::where('nim','=',$nim)->first();
		return view("verifikasiujianta2.detail")
		->with('pengajuanUjian',$pengajuanUjian)
		->with('psta',$psta)
		->with('verifikasi',$verifikasi);
	} 

	public function postInput($nim, Request $request){

		$field=[
		'ksmktm',
		'biaya_ujian',
		'dkn',
		'sertifikat',
		'suliet',
		'printscreen_suliet',
		'rekomendasi',
		'form_ta1',
		'eksemplar',
		'bebas_pustaka',
		'bebas_bayaran',
		'sk_ta'
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

		$verifikasi=VerifikasiUjianTa2::firstOrNew(["nim"=>$nim]);
		$verifikasi->fill($checkable);
		$verifikasi->save();
		if($hitung==8){
			PengajuanSyaratUjianTa2::where('nim','=',$nim)->update(["status"=>2]);
		} 


		return redirect('verifikasi_ujian/ta2');
	}


} // end of class
 