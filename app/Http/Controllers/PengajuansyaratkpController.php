<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuansyaratkp;
use App\Pengajuanpembkp;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class PengajuansyaratkpController extends Controller {

	public function index(){
		$nim=Auth::user()->mahasiswa->nim;
		$pskp=Pengajuansyaratkp::where("nim","=",$nim)->first();
		$ppkp=Pengajuanpembkp::where("nim","=",$nim)->first();
		return view('pengajuansyaratkp.index')->with('pskp',$pskp)->with('ppkp',$ppkp);

	}

	public function input(){
		$nim=Auth::user()->mahasiswa->nim;
		$pskp=Pengajuansyaratkp::where("nim","=",$nim)->first();
		return view('pengajuansyaratkp.input')->with('pskp',$pskp);
		
	}
	public function prosesInput(Request $request){
		$nim=Auth::user()->mahasiswa->nim;
		$ppkp=Pengajuanpembkp::where("nim","=",$nim)->first();
		$pskp=Pengajuansyaratkp::firstOrNew(["nim"=>$nim]);
		$pskp->fill($request->all());
		$pskp->id_pengajuan_pembkp=$ppkp->id;
		$pskp->save();
		return redirect("pengajuansyaratkp");
	}


}
 