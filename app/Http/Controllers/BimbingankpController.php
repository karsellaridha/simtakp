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

public function dataMhsbimbingankp(){
	$datamhsbimbingankp=Pengajuanpembkp::where('nip','=',Auth::user()->dosen->nip)->get();
return view("mhsdibimbingkp.index")->with("datamhsbimbingankp",$datamhsbimbingankp);
}

public function bimbingankp($id){
		$datamhsbimbingankp=Pengajuanpembkp::findOrFail($id);
		return view('mhsdibimbingkp.bimbingankp')->with('datamhsbimbingankp',$datamhsbimbingankp);
	}

}
 