<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Dosen;
use App\User;

class DosenController extends Controller {
public function tambah(){
	return view("dosen.tambah_dosen");
	}

public function prosesTambah(Request $request, Dosen $dosen){
	$dosen->saveDsn($request->all());
	return redirect("dosen");

	}

public function datadosen(){
	$dosen=Dosen::all()->sortBy('nama');

return view("dosen.index")->with("datadosen",$dosen);
}

public function editdosen($id){
	$dosen=Dosen::findOrFail($id);
	return view('dosen.edit')->with('dosen',$dosen);
}

public function updatedosen(Request $request, $id){
	Dosen::findOrFail($id)->update($request->all());
	return redirect('dosen');
}

public function	deletedosen($id){
	$dosen=Dosen::findOrFail($id);
	$user = User::findOrfail($dosen->id_user);
	$user->delete();
	return redirect('dosen');
}

}
 