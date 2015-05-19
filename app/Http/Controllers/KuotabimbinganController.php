<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Dosen;
use App\Kuotabimbingan;

class KuotabimbinganController extends Controller {

	public function index(){
		$dosen=Dosen::all();
		return view('kuotabimbingan.index')->with('dosen',$dosen);

	}

	public function input($nip){
		$dosen=Dosen::where('nip','=',$nip)->first();
		return view("kuotabimbingan.input")->with('dosen',$dosen);
	}

	public function prosesInput(Request $request){
		$kuotabimbingan=Kuotabimbingan::firstOrNew(["nip"=>$request->input('nip')]);
		$kuotabimbingan->fill($request->all());
		$kuotabimbingan->save();
		return redirect("kuotabimbingan");

	}

	


}
 