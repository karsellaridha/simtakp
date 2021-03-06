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
use App\VerifikasiUjianTa2;
use App\PengujiUjianTa;
use App\Dosen;
use App\Verifikasisyaratta;


class SusunJadwalTaController extends Controller {

	public function getIndex($jenista){

		if($jenista == 'ta1'){
			$data = PengajuanSyaratUjianTa1::where('status','=',2)->get();
		}elseif($jenista == 'ta2'){
			$data = PengajuanSyaratUjianTa2::where('status','=',2)->get();
		}

		$psta = new Pengajuansyaratta;
		$uji = new PengujiUjianTa;
		return view('susunjadwalta.index')
		->with('jenista',$jenista)
		->with('data',$data)
		->with('psta',$psta)
		->with('uji',$uji);
	}

	public function getJadwal($nim, $jenista){
		if($jenista == 'ta1'){
			$psut1 = PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();	
		}elseif($jenista == 'ta2'){
			$psut1 = PengajuanSyaratUjianTa2::where('nim','=',$nim)->first();
		}
		
		return view('susunjadwalta.jadwal')->with('jenista',$jenista)->with('nim',$nim)->with('psut1',$psut1);
	} 

	public function postJadwal($nim, $jenista,  Request $request){
		if($jenista == 'ta1'){
			PengajuanSyaratUjianTa1::where('nim','=',$nim)->update($request->except('_token'));
		}elseif($jenista == 'ta2'){
			PengajuanSyaratUjianTa2::where('nim','=',$nim)->update($request->except('_token'));
		}
		return redirect('susunjadwalta/index/'.$jenista);
	}

	public function getPenguji($nim, $jenista){
		$dosen = Dosen::lists('nama','nip');
		$penguji = PengujiUjianTa::where('nim','=',$nim)->first();
		return view('susunjadwalta.penguji')->with('nim',$nim)
		->with('jenista',$jenista)
		->with('dosen',$dosen)
		->with('penguji',$penguji);
	} 

	public function postPenguji($nim, $jenista, Request $request){

		$penguji = PengujiUjianTa::firstOrNew(['nim'=>$nim]);
		$penguji->fill($request->all());
		$penguji->save();

		return redirect('susunjadwalta/index/'.$jenista);
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


	public function cetakBeritaAcaraProposal($nim){
		$ujianta1=PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.berita_acara_proposal')
		->with('ujianta1',$ujianta1)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

	public function cetakFormPerbaikanProposal($nim){
		$ujianta1=PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.perbaikan_ujian_proposal')
		->with('ujianta1',$ujianta1)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

	public function cetakFormPenilaianProposal($nim){
		$ujianta1=PengajuanSyaratUjianTa1::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.form_nilai_proposal')
		->with('ujianta1',$ujianta1)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

		public function cetakBeritaAcaraKomprehensif($nim){
		$ujianta2=PengajuanSyaratUjianTa2::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.berita_acara_kompre')
		->with('ujianta2',$ujianta2)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

	public function cetakFormPerbaikanKomprehensif($nim){
		$ujianta2=PengajuanSyaratUjianTa2::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.perbaikan_ujian_kompre')
		->with('ujianta2',$ujianta2)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

	public function cetakFormPenilaianKomprehensif($nim){
		$ujianta2=PengajuanSyaratUjianTa2::where('nim','=',$nim)->first();
		$pengajuan=Pengajuansyaratta::where('nim','=',$nim)->first();
		$penguji=PengujiUjianTa::where('nim','=',$nim)->first();

		return view('form_cetak.form_nilai_kompre')
		->with('ujianta2',$ujianta2)
		->with('pengajuan',$pengajuan)
		->with('penguji',$penguji);
	}

} // end of class
 