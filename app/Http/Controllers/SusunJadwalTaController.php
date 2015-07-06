<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\Pengajuanpembta;
use App\PengajuanSyaratUjianTa1;
use App\PengajuanSyaratUjianTa2;
use App\Pengajuansyaratta;
use Auth;
use App\VerifikasiUjianTa1;
use App\PengujiUjianTa;
use App\Dosen;
use App\Verifikasisyaratta;


class SusunJadwalTaController extends Controller {

	public function getIndex(){
		$data = PengajuanSyaratUjianTa1::where('status','=',2)->get();
		$psta = new Pengajuansyaratta;
		$uji = new PengujiUjianTa;
		return view('susunjadwalta.index')
		->with('data',$data)
		->with('psta',$psta)
		->with('uji',$uji);
	}

	public function getJadwal($nim){
		$psut1 = PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();
		return view('susunjadwalta.jadwal')->with('nim',$nim)->with('psut1',$psut1);
	} 

	public function postJadwal($nim, Request $request){
		PengajuanSyaratUjianTa1::where('nim','=',$nim)->update($request->except('_token'));
		return redirect('susunjadwalta');
	}

	public function getPenguji($nim){
		$dosen = Dosen::lists('nama','nip');
		$penguji = PengujiUjianTa::where('nim','=',$nim)->first();
		return view('susunjadwalta.penguji')->with('nim',$nim)
		->with('dosen',$dosen)
		->with('penguji',$penguji);
	} 

	public function postPenguji($nim, Request $request){

		$penguji = PengujiUjianTa::firstOrNew(['nim'=>$nim]);
		$penguji->fill($request->all());
		$penguji->save();

		return redirect('susunjadwalta');
	}

	public function getUjianProposal()
	{
		$pengajuanUjian=PengajuanSyaratUjianTa1::all();
		$psta=new Pengajuansyaratta;
		$penguji=new PengujiUjianTa;

		return view('ujianta.indexproposal')
		->with('psta',$psta)
		->with('pengajuanUjian',$pengajuanUjian)
		->with('penguji',$penguji);
	}

	public function getUjianKomprehensif()
	{
		$pengajuanUjian=PengajuanSyaratUjianTa2::all();
		$psta=new Pengajuansyaratta;
		$penguji=new PengujiUjianTa;

		return view('ujianta.indexkomprehensif')
		->with('psta',$psta)
		->with('pengajuanUjian',$pengajuanUjian)
		->with('penguji',$penguji);
	}


	public function cetakBeritaAcaraProposal($id){
		$verifikasi=Verifikasisyaratta::findOrFail($id);
		$penguji=PengujiUjianTa::findOrFail($id);

		return view('form_cetak.berita_acara_proposal')
		->with('verifikasi',$verifikasi)
		->with('penguji',$penguji);
	}

	public function cetakFormPerbaikanProposal($id){
		$verifikasi=Verifikasisyaratta::findOrFail($id);
		$penguji=PengujiUjianTa::findOrFail($id);

		return view('form_cetak.perbaikan_ujian_proposal')
		->with('verifikasi',$verifikasi)
		->with('penguji',$penguji);
	}

} // end of class
 