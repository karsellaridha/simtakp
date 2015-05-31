<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuansyaratta;
use App\Pengajuanpembta;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class PengajuansyarattaController extends Controller {

	public function index(){
		$nim=Auth::user()->mahasiswa->nim;
		$psta=Pengajuansyaratta::where("nim","=",$nim)->first();
		$ppta=Pengajuansyaratta::where("nim","=",$nim)->first();
		return view('pengajuansyaratta.index')->with('psta',$psta)->with('ppta',$ppta);

	}

	public function input(){
		$nim=Auth::user()->mahasiswa->nim;
		$psta=Pengajuansyaratta::where("nim","=",$nim)->first();
		return view('pengajuansyaratta.input')->with('psta',$psta);
		
	}
	public function prosesInput(Request $request){
		$nim=Auth::user()->mahasiswa->nim;
		$ppta=Pengajuanpembta::where("nim","=",$nim)->first();
		$psta=Pengajuansyaratta::firstOrNew(["nim"=>$nim]);
		$input = $request->all();
		$input['status_syaratta'] = 'diajukan'; 
		$psta->fill($input);
		$psta->id_pengajuan_pembta=$ppta->id;
		$psta->save();
		return redirect("pengajuansyaratta");
	}


}
 