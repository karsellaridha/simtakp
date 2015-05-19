<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Pengajuansyaratkp;
use App\Pengajuanpembkp;
use App\Verifikasisyaratkp;
use App\Dosen;
use App\Mahasiswa;

class ValidasisyaratkpController extends Controller {

	public function index(){
		$pskp=Pengajuansyaratkp::all();
		return view('validasisyaratkp.index')->with('pskp',$pskp);

	}

	public function detail($id){
		$pskp=Pengajuansyaratkp::findOrFail($id);
		return view('validasisyaratkp.detail')->with('pskp',$pskp);
	}

	public function validasi($id, Request $request){
			Pengajuansyaratkp::findOrFail($id)->update(["status_syaratkp"=>"divalidasi"]); 
		return redirect('validasisyaratkp');
	}
}
 