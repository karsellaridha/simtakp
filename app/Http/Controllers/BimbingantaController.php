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
use App\Bimbinganta;
use App\Inputnilaikp;
use App\NilaiTa1;
use App\PengujiUjianTa;

class BimbingantaController extends Controller {

public function tambah($nip){
	return view("bimbinganta.tambah_bimbinganta")
	->with('nip',$nip);
	}

public function prosesTambah(Request $request){
	Bimbinganta::create(['nim'=>Auth::user()->mahasiswa->nim,
		'nip'=>$request->input('nip'),
		'tanggal'=>$request->input('tanggal'),
		'hasil_konsultasi'=>$request->input('hasil_konsultasi'),
		'id_pengajuanpembkp'=>Auth::user()->mahasiswa->pengajuanpembkp->id]);
	return redirect("bimbinganta");

	}

public function dataBimbinganta(){
	$databimbinganta=Bimbinganta::where("nim","=",Auth::user()->mahasiswa->nim)->orderBy('tanggal')->get();

	return view("bimbinganta.index")->with("databimbinganta",$databimbinganta);
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
	$nilaita1 = new NilaiTa1;
	return view("mhsdibimbingta.index")
	->with('psta', $psta)
	->with("datamhsbimbinganta",$datamhsbimbingankp)
	->with('nilaita1',$nilaita1);
	}


public function dataMhsujianta(){
	if(Auth::user()->role=="ketua jurusan"){
		$datamhsbimbingankp=PengujiUjianTa::all();
	}
	else{
		$datamhsbimbingankp=PengujiUjianTa::where('penguji_1','=',Auth::user()->dosen->nip)
		->orWhere('penguji_2','=',Auth::user()->dosen->nip)
		->get();
	}
	$psta = new Pengajuansyaratta;
	$nilaita1 = new NilaiTa1;
	$pengajuanpembta = new Pengajuanpembta;
	return view("mhsdiujita.index")
	->with('psta', $psta)
	->with('pengajuanpembta',$pengajuanpembta)
	->with("datamhsbimbinganta",$datamhsbimbingankp)
	->with('nilaita1',$nilaita1);
	}


public function bimbingankp($id){
		$datamhsbimbingankp=Pengajuanpembkp::findOrFail($id);
		return view('mhsdibimbingkp.bimbingankp')->with('datamhsbimbingankp',$datamhsbimbingankp);
	}

public function detail($nim){
		$pengajuanpembta=Pengajuanpembta::where('nim','=',$nim)->first();
		$nilaikp=null;
		$psta = new Pengajuansyaratta;
		$nilaita1 = new NilaiTa1;
		return view('mhsdibimbingta.detail')
		->with('nilaita1',$nilaita1)
		->with('psta',$psta)
		->with('pengajuanpembta',$pengajuanpembta)->with('nilaikp',$nilaikp);
	
}

public function penilaian($nim){
$nilaiuta1 = NilaiTa1::where('nim','=',$nim)->where('nip','=',Auth::user()->dosen->nip)->first();
return view('mhsdibimbingta.penilaian')->with('nim',$nim)
->with('nilaiuta1',$nilaiuta1);
}

public function penilaianProses($nim, Request $request){
	$nilai = NilaiTa1::firstOrNew(['nip'=>Auth::user()->dosen->nip]);
	$data = $request->all();
	$data['nim'] = $nim;
	$nilai->fill($data);
	$nilai->save();

	return redirect("mhsdibimbingta/detail/$nim");
}

}
 