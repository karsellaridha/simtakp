<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuansyaratkp;
use App\Pengajuanpembkp;
use App\Verifikasisyaratkp;
use App\Dosen;
use App\Mahasiswa;

class VerifikasisyaratkpController extends Controller {

	public function index(){
		$pskp=Pengajuansyaratkp::all();
		$verifikasi=new Verifikasisyaratkp;
		return view('verifikasisyaratkp.index')->with('pskp',$pskp)->with('verifikasi',$verifikasi);

	}

	public function detail($id){
		$pskp=Pengajuansyaratkp::findOrFail($id);
		return view('verifikasisyaratkp.detail')->with('pskp',$pskp);
	}

	public function verifikasi($id, Request $request){
		$field=['jumlah_sks','id_transaksispp','id_transaksidpl','lama_kp'];
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

		$verifikasi=Verifikasisyaratkp::firstOrNew(["id_pengajuan_syaratkp"=>$id]);
		$verifikasi->fill($checkable);
		$verifikasi->save();
		if($hitung==4){
			Pengajuansyaratkp::findOrFail($id)->update(["status_syaratkp"=>"diverifikasi"]);
		} 
		return redirect('verifikasisyaratkp');
	}

	public function cetakVerifikasi($id){
			
		$pskp=Pengajuansyaratkp::findOrFail($id);
		$verifikasi=Verifikasisyaratkp::findOrFail($id);
		return view('form_cetak.cetak_verifikasi_kp')->with('pskp',$pskp)->with('verifikasi',$verifikasi);
	}

	public function cetakSuratizin($id){
			
		$pskp=Pengajuansyaratkp::findOrFail($id);
		$verifikasi=Verifikasisyaratkp::findOrFail($id);
		$ppkp=Pengajuanpembkp::findOrFail($id);
		return view('form_cetak.surat_izin_kp')->with('pskp',$pskp)->with('verifikasi',$verifikasi)->with('ppkp',$ppkp);
	}

	public function cetakSk($id){
			
		$pskp=Pengajuansyaratkp::findOrFail($id);
		$verifikasi=Verifikasisyaratkp::findOrFail($id);
		$ppkp=Pengajuanpembkp::findOrFail($id);
		return view('form_cetak.sk_kp')->with('pskp',$pskp)->with('verifikasi',$verifikasi)->with('ppkp',$ppkp);;
	}
}
 