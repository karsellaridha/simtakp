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

class PenilaianTaController extends Controller {

	public function detail($sebagai,$nim){
		$pengajuanpembta=Pengajuanpembta::where('nim','=',$nim)->first();
		$nilaikp=null;
		$psta = new Pengajuansyaratta;
		$nilaita1 = new NilaiTa1;
		$nilaita2 = new NilaiTa2;
		return view('penilaian.detail')
		->with('nilaita1',$nilaita1)
		->with('nilaita2',$nilaita2)
		->with('psta',$psta)
		->with('sebagai',$sebagai)
		->with('pengajuanpembta',$pengajuanpembta)->with('nilaikp',$nilaikp);
	
	}

	public function penilaian($sebagai,$jenis,$nim){
		
		if($jenis == 'ta1'){

		$nilaiuta1 = NilaiTa1::where('nim','=',$nim)->where('nip','=',Auth::user()->dosen->nip)->first();
		
		}
		elseif($jenis == 'ta2'){
		$nilaiuta1 = NilaiTa2::where('nim','=',$nim)->where('nip','=',Auth::user()->dosen->nip)->first();
		}

		return view('penilaian.penilaian')->with('nim',$nim)
		->with('nilaiuta1',$nilaiuta1)
		->with('jenis',$jenis)
		->with('sebagai',$sebagai);
	}

	public function penilaianProses($sebagai,$jenis,$nim, Request $request){
		
		if($jenis=='ta1'):
			$nilai = NilaiTa1::firstOrNew(['nip'=>Auth::user()->dosen->nip]);
		elseif($jenis == 'ta2'):
			$nilai = NilaiTa2::firstOrNew(['nip'=>Auth::user()->dosen->nip]);
		endif;

		$data = $request->all();
		$data['nim'] = $nim;
		$nilai->fill($data);
		$nilai->save();

		return redirect("penilaian/detail/$sebagai/$nim");
	}

}