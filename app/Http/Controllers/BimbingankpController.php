<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\Dosen;
use App\Pengajuanpembkp;
use Auth;
use App\Bimbingankp;
use App\Inputnilaikp;

class BimbingankpController extends Controller {
public function tambah(){
	return view("bimbingankp.tambah_bimbingankp");
	}

public function prosesTambah(Request $request, Bimbingankp $bimbingankp){
	Bimbingankp::create(['nim'=>Auth::user()->mahasiswa->nim,
		'nip'=>Auth::user()->mahasiswa->pengajuanpembkp->dosen->nip,
		'tanggal'=>$request->input('tanggal'),
		'hasil_konsultasi'=>$request->input('hasil_konsultasi'),
		'id_pengajuanpembkp'=>Auth::user()->mahasiswa->pengajuanpembkp->id]);
	return redirect("bimbingankp");

	}

public function dataBimbingankp(){
	$bimbingankp=Bimbingankp::where("nim","=",Auth::user()->mahasiswa->nim)->orderBy('tanggal')->get();

return view("bimbingankp.index")->with("databimbingankp",$bimbingankp);
}

public function editBimbingankp($id){
	$bimbingankp=Bimbingankp::findOrFail($id);
	return view('bimbingankp.edit')->with('bimbingankp',$bimbingankp);
}

public function updateBimbingankp(Request $request, $id){
	Bimbingankp::findOrFail($id)->update($request->all());
	return redirect('bimbingankp');
}

public function	deleteBimbingankp($id){
	Bimbingankp::findOrFail($id)->delete();
	return redirect('bimbingankp');
}

public function dataMhsbimbingankp(Request $request){
	if(Auth::user()->role=="ketua jurusan"){ 
		if($request->has('tahun')){
			$datamhsbimbingankp=Pengajuanpembkp::where('tahun','=',$request->input("tahun"))->get();
		}
		else{
			$datamhsbimbingankp=Pengajuanpembkp::all();
		}
		
	}
	else{
		$datamhsbimbingankp=Pengajuanpembkp::where('nip','=',Auth::user()->dosen->nip)->get();
	}
	return view("mhsdibimbingkp.index")->with("datamhsbimbingankp",$datamhsbimbingankp)
	->with("tahun",$request->has('tahun'))
	->with("tahunnya",$request->input('tahun'));
	}

public function bimbingankp($id){
		$datamhsbimbingankp=Pengajuanpembkp::findOrFail($id);
		return view('mhsdibimbingkp.bimbingankp')->with('datamhsbimbingankp',$datamhsbimbingankp);
	}

public function detail($nim){
		$pengajuanpembkp=Pengajuanpembkp::where('nim','=',$nim)->first();
		$nilaikp=Inputnilaikp::where('nim','=',$nim)->first();
		return view('mhsdibimbingkp.detail')->with('pengajuanpembkp',$pengajuanpembkp)->with('nilaikp',$nilaikp);
	
}

public function cetakPenilaiandosen($nim){
		$pengajuanpembkp=Pengajuanpembkp::where('nim','=',$nim)->first();
		$nilaikp=Inputnilaikp::where('nim','=',$nim)->first();
		return view('form_cetak.cetak_penilaian_dosen')->with('pengajuanpembkp',$pengajuanpembkp)->with('nilaikp',$nilaikp);
	
}

public function cetakRekappenilaian($nim){
		$pengajuanpembkp=Pengajuanpembkp::where('nim','=',$nim)->first();
		$nilaikp=Inputnilaikp::where('nim','=',$nim)->first();
		return view('form_cetak.cetak_rekap_penilaian')->with('pengajuanpembkp',$pengajuanpembkp)->with('nilaikp',$nilaikp);
	
}

}
 