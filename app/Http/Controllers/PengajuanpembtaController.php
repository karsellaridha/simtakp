<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuanpembta;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class PengajuanpembtaController extends Controller {

	public function daftarDosen($pemb){
		$dosen=Dosen::all();
		return view('pengajuanpembta.index')->with('dosen',$dosen)->with('pemb',$pemb);

	}

	public function index(){
		$nim=Auth::user()->mahasiswa->nim;
		$ppta=Pengajuanpembta::where("nim","=",$nim)->first();
		return view('pengajuanpembta.detail')->with('ppta',$ppta);

	}

	public function input(){
		$nim=Auth::user()->mahasiswa->nim;
		$ppta=Pengajuanpembta::where("nim","=",$nim)->first();
		
		return view('pengajuanpembta.input')->with('ppta',$ppta);
		
	}
	public function prosesInput(Request $request){
		$dosen=Dosen::where("nip","=",$request->input('nip'))->first();
		if($dosen->sisakuotakp()>0){
			$nim=Auth::user()->mahasiswa->nim;
			$ppkp=Pengajuanpembta::firstOrNew(["nim"=>$nim]);
			$ppkp->fill($request->all());
			$ppkp->save();
		}
		
		return redirect("pengajuanpembta");
	}


}
 