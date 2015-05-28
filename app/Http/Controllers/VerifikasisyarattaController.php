<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuansyaratta;
use App\Pengajuanpembta;
use App\Verifikasisyaratta;
use App\Dosen;
use App\Mahasiswa;

class VerifikasisyarattaController extends Controller {

	public function index(){
		$psta=Pengajuansyaratta::all();
		$verifikasi=new Verifikasisyaratta;
		return view('verifikasisyaratta.index')->with('psta',$psta)->with('verifikasi',$verifikasi);

	}

	public function detail($id){
		$psta=Pengajuansyaratta::findOrFail($id);
		return view('verifikasisyaratta.detail')->with('psta',$psta);
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

		$verifikasi=Verifikasisyaratta::firstOrNew(["id_pengajuan_syaratta"=>$id]);
		$verifikasi->fill($checkable);
		$verifikasi->save();
		if($hitung==4){
			Pengajuansyaratta::findOrFail($id)->update(["status_syaratta"=>"diverifikasi"]);
		} 
		return redirect('verifikasisyaratta');
	}

}
 