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
		$pemb1=Dosen::where("nip","=",$request->input('pembimbing_1'))->first();

		if($request->input('pembimbing_2')==''){
			$pemb2 = null;	
		}else{
			$pemb2 = Dosen::where("nip","=",$request->input('pembimbing_2'))->first();	
		}
		if($pemb1->sisakuotata()>=0){
			if(isset($pemb2)){
				if($pemb2->sisakuotata()>=0){
					$simpan = $request->all();
					$simpan['pembimbing_2'] = ($request->input('pembimbing_2')=='') ? null : $request->input('pembimbing_2');
					$nim=Auth::user()->mahasiswa->nim;
					$ppkp=Pengajuanpembta::firstOrNew(["nim"=>$nim]);
					$ppkp->fill($simpan);
					$ppkp->save();
				}
			}else{
					$simpan = $request->all();
					$simpan['pembimbing_2'] = ($request->input('pembimbing_2')=='') ? null : $request->input('pembimbing_2');
					$nim=Auth::user()->mahasiswa->nim;
					$ppkp=Pengajuanpembta::firstOrNew(["nim"=>$nim]);
					$ppkp->fill($simpan);
					$ppkp->save();
			}
		}
		
		return redirect("pengajuanpembta");
	}


}
 