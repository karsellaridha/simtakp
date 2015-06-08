<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\Dosen;
use App\Pengajuanpembta;
use App\Pengajuansyaratta;
use Auth;
use App\Bimbingankp;
use App\Inputnilaikp;
use App\NilaiTa1;

class BimbingantaController extends Controller {

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

public function dataBimbinganta(){
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

public function dataMhsbimbinganta(){
	if(Auth::user()->role=="ketua jurusan"){
		$datamhsbimbingankp=Pengajuanpembta::all();
	}
	else{
		$datamhsbimbingankp=Pengajuanpembta::where('pembimbing_1','=',Auth::user()->dosen->nip)
		->orWhere('pembimbing_2','=',Auth::user()->dosen->nip)
		->get();
	}
	$psta = new Pengajuansyaratta;

	return view("mhsdibimbingta.index")
	->with('psta', $psta)
	->with("datamhsbimbinganta",$datamhsbimbingankp);
	}

public function bimbingankp($id){
		$datamhsbimbingankp=Pengajuanpembkp::findOrFail($id);
		return view('mhsdibimbingkp.bimbingankp')->with('datamhsbimbingankp',$datamhsbimbingankp);
	}

public function detail($nim){
		$pengajuanpembta=Pengajuanpembta::where('nim','=',$nim)->first();
		$nilaikp=null;
		$psta = new Pengajuansyaratta;
		return view('mhsdibimbingta.detail')
		->with('psta',$psta)
		->with('pengajuanpembta',$pengajuanpembta)->with('nilaikp',$nilaikp);
	
}

public function penilaian($nim){
$nilaiuta1 = NilaiTa1::where('nim','=',$nim)->first();
return view('mhsdibimbingta.penilaian')->with('nim',$nim)
->with('nilaiuta1',$nilaiuta1);
}

public function penilaianProses($nim, Request $request){
	$nilai = NilaiTa1::firstOrNew(['nim'=>$nim]);
	$nilai->fill($request->all());
	$nilai->save();

	return redirect("mhsdibimbingta/detail/$nim");
}

}
 