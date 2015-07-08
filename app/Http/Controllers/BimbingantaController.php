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
use App\NilaiTa2;
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
		'id_pengajuanpembta'=>Auth::user()->mahasiswa->pengajuanpembta->id]);
	return redirect("bimbinganta");

	}

public function dataBimbinganta(){
	$databimbinganta=Bimbinganta::where("nim","=",Auth::user()->mahasiswa->nim)->orderBy('tanggal')->get();

	return view("bimbinganta.index")->with("databimbinganta",$databimbinganta);
}

public function editBimbinganta($id){
	$bimbinganta=Bimbinganta::findOrFail($id);
	$nip=$bimbinganta->nip;
	return view('bimbinganta.edit')->with('bimbinganta',$bimbinganta)
	->with('nip',$nip);
}

public function updateBimbinganta(Request $request, $id){
	Bimbinganta::findOrFail($id)->update($request->all());
	return redirect('bimbinganta');
}

public function	deleteBimbinganta($id){
	Bimbinganta::findOrFail($id)->delete();
	return redirect('bimbinganta');
}

public function dataMhsbimbinganta(Request $request){
	if(Auth::user()->role=="ketua jurusan"){
		if($request->has('tahun')){
			$datamhsbimbinganta=Pengajuanpembta::where('tahun','=',$request->input("tahun"))->get();
		}
		else {
			$datamhsbimbinganta=Pengajuanpembta::all();
		}
		
	}
	else{
		$datamhsbimbinganta=Pengajuanpembta::where('pembimbing_1','=',Auth::user()->dosen->nip)
		->orWhere('pembimbing_2','=',Auth::user()->dosen->nip)
		->get();
	}
	$psta = new Pengajuansyaratta;
	$nilaita1 = new NilaiTa1;
	$nilaita2 = new NilaiTa2;
	return view("mhsdibimbingta.index")
	->with('psta', $psta)
	->with("datamhsbimbinganta",$datamhsbimbinganta)
	->with('nilaita1',$nilaita1)
	->with('nilaita2',$nilaita2)
	->with("tahun",$request->has('tahun'))
	->with("tahunnya",$request->input('tahun'))
		;
	}


public function dataMhsujianta(){
	if(Auth::user()->role=="ketua jurusan"){
		$datamhsbimbinganta=PengujiUjianTa::all();
	}
	else{
		$datamhsbimbinganta=PengujiUjianTa::where('penguji_1','=',Auth::user()->dosen->nip)
		->orWhere('penguji_2','=',Auth::user()->dosen->nip)
		->get();
	}
	$psta = new Pengajuansyaratta;
	$nilaita1 = new NilaiTa1;
	$pengajuanpembta = new Pengajuanpembta;
	return view("mhsdiujita.index")
	->with('psta', $psta)
	->with('pengajuanpembta',$pengajuanpembta)
	->with("datamhsbimbinganta",$datamhsbimbinganta)
	->with('nilaita1',$nilaita1);
	}


public function bimbinganta($id){
		$datamhsbimbinganta=Pengajuanpembta::findOrFail($id);
		return view('mhsdibimbingta.bimbinganta')->with('datamhsbimbinganta',$datamhsbimbinganta);
	}





}
 