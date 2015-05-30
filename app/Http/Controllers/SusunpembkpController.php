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
		$dosen=Dosen::lists('nama','nip');
		$dosenAll=Dosen::all();
		$ppkp = Pengajuanpembkp::where('tahun','=',date('Y'))->where('status_pembimbing','=','diajukan')->get();
		return view('susunpembkp.index')
		->with('ppkp',$ppkp)
		->with('dosen',$dosen)
		->with('dosenAll',$dosenAll);

	}

	public function input(Request $request){
		$id = $request->input('id');
		$pembimbing= $request->input('pembimbing');

		DB::transaction(function()use($id,$pembimbing){
	
			foreach ($id as $key => $value) {
					DB::table('pengajuan_pembkp')
					->where('id','=',$value)
					->update([
							'nip'=>$pembimbing[$key],
							'status_pembimbing'=>'disetujui'
						]);
				}	
		});

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
 