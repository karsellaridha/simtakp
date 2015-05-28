<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuanpembta;
use App\KuotaBimbingan;
use App\Dosen;
use App\Mahasiswa;
use DB;

class SusunpembtaController extends Controller {

	public function index(){
		$dosen=Dosen::lists('nama','nip');
		$list_dosen=KuotaBimbingan::lists('kuota_ta','nip');
		$ppta = Pengajuanpembta::where('tahun','=',date('Y'))->get();
		return view('susunpembta.index')
		->with('ppta',$ppta)
		->with('dosen',$dosen)
		->with('list_dosen',$list_dosen);

	}

	public function simpan(){
		$mahasiswa=Pengajuanpembta::where('status_pembimbing','=','diajukan')->where('tahun','=',date('Y'))->get();
		foreach ($mahasiswa as $key => $value) {
			DB::table('pengajuan_pembta')->where("nim", "=",$value->nim)->update(["status_pembimbing"=>"disetujui"]);
		}
		return redirect ('susunpembta');

	}

	public function input(Request $request){
		$nip_temp = '';
			$p1 = Pengajuanpembta::findOrFail($request->input('tukar')[0]);
			$p2 = Pengajuanpembta::findOrFail($request->input('tukar')[1]);

			$nip_temp = $p1->nip;
			$p1->nip = $p2->nip;
			$p2->nip = $nip_temp;

			$p1->save();
			$p2->save();

			return redirect('susunpembta');
	}

	public function lihatdata(){
		$dosen=Dosen::lists('nama','id');
		$ppta=Pengajuanpembta::where('status_pembimbing','=','disetujui')->get();
		return view('susunpembta.lihatdata')->with('ppkp',$ppkp)->with('dosen',$dosen);
	}

	public function batal($id){
		$ppkp=Pengajuanpembta::findOrFail($id);
		$ppkp->status_pembimbing='diajukan';
		$ppkp->save();

		return redirect('susunpembta');
	}

	public function getKuota(){

	}

}
 