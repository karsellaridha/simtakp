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
		$dosenAll=Dosen::all();
		$ppta = Pengajuanpembta::where('tahun','=',date('Y'))->where('status_pembimbing','=','diajukan')->get();
		return view('susunpembta.index')
		->with('ppta',$ppta)
		->with('dosen',$dosen)
		->with('dosenAll',$dosenAll);

	}

	public function input(Request $request){
		$id = $request->input('id');
		$pembimbing_1 = $request->input('pembimbing_1');
		$pembimbing_2 = $request->input('pembimbing_2');

		DB::transaction(function()use($id,$pembimbing_1,$pembimbing_2){
	
			foreach ($id as $key => $value) {
					DB::table('pengajuan_pembta')
					->where('id','=',$value)
					->update([
							'pembimbing_1'=>$pembimbing_1[$key],
							'pembimbing_2'=>($pembimbing_2[$key]=='')? null : $pembimbing_2[$key],
							'status_pembimbing'=>'disetujui'
						]);
				}	
		});

		return redirect ('susunpembta');		

	}

	public function lihatdata(){
		$dosen=Dosen::lists('nama','id');
		$ppta=Pengajuanpembta::where('status_pembimbing','=','disetujui')->get();
		return view('susunpembta.lihatdata')->with('ppta',$ppta)->with('dosen',$dosen);
	}

	public function batal($id){
		$ppkp=Pengajuanpembta::findOrFail($id);
		$ppkp->status_pembimbing='diajukan';
		$ppkp->save();

		return redirect('susunpembta');
	}

	public function printReguler(){
		$dosen=Dosen::lists('nama','id');
		$ppta=Pengajuanpembta::where('status_pembimbing','=','disetujui')->get();
		return view('form_cetak.printreguler_ta')->with('ppta',$ppta)->with('dosen',$dosen);
	}

	public function printBilingual(){
		$dosen=Dosen::lists('nama','id');
		$ppta=Pengajuanpembta::where('status_pembimbing','=','disetujui')->get();
		return view('form_cetak.printbilingual_ta')->with('ppta',$ppta)->with('dosen',$dosen);

	}

}
 