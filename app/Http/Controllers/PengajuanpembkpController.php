<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuanpembkp;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class PengajuanpembkpController extends Controller {

	public function daftarDosen(){
		$dosen=Dosen::all();
		return view('pengajuanpembkp.index')->with('dosen',$dosen);

	}

	public function index(){
		$nim=Auth::user()->mahasiswa->nim;
		$ppkp=Pengajuanpembkp::where("nim","=",$nim)->first();
		return view('pengajuanpembkp.detail')->with('ppkp',$ppkp);

	}

	public function input(){
		$nim=Auth::user()->mahasiswa->nim;
		$ppkp=Pengajuanpembkp::where("nim","=",$nim)->first();
		
		return view('pengajuanpembkp.input')->with('ppkp',$ppkp);
		
	}
	public function prosesInput(Request $request){
		$dosen=Dosen::where("nip","=",$request->input('nip'))->first();
		if($dosen->sisakuotakp()>0){
			$nim=Auth::user()->mahasiswa->nim;
			$ppkp=Pengajuanpembkp::firstOrNew(["nim"=>$nim]);
			$ppkp->fill($request->all());
			$ppkp->save();
		}
		
		return redirect("pengajuanpembkp");
	}


}
 