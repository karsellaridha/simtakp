<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuanpembkp;
use App\Dosen;
use App\Mahasiswa;
use DB;

class SusunpembkpController extends Controller {

	public function index(){
		$dosen=Dosen::all();
		$ppkp= new Pengajuanpembkp;
		return view('susunpembkp.index')->with('ppkp',$ppkp)->with('dosen',$dosen);

	}

	public function simpan(){
		$mahasiswa=Pengajuanpembkp::where('status_pembimbing','=','diajukan')->where('tahun','=',date('Y'))->get();
		foreach ($mahasiswa as $key => $value) {
			DB::table('pengajuan_pembkp')->where("nim", "=",$value->nim)->update(["status_pembimbing"=>"disetujui"]);
		}
		return redirect ('susunpembkp');

	}

	public function input(Request $request){
		$nip_temp = '';
			$p1 = Pengajuanpembkp::findOrFail($request->input('tukar')[0]);
			$p2 = Pengajuanpembkp::findOrFail($request->input('tukar')[1]);

			$nip_temp = $p1->nip;
			$p1->nip = $p2->nip;
			$p2->nip = $nip_temp;

			$p1->save();
			$p2->save();

			return redirect('susunpembkp');
	}

	public function lihatdata(){
		$dosen=Dosen::lists('nama','id');
		$ppkp=Pengajuanpembkp::where('status_pembimbing','=','disetujui')->get();
		return view('susunpembkp.lihatdata')->with('ppkp',$ppkp)->with('dosen',$dosen);
	}

	public function batal($id){
		$ppkp=Pengajuanpembkp::findOrFail($id);
		$ppkp->status_pembimbing='diajukan';
		$ppkp->save();

		return redirect('susunpembkp');
	}

	public function getKuota(){

	}

}
 