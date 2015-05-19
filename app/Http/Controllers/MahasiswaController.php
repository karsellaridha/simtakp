<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Mahasiswa;
use App\User;

class MahasiswaController extends Controller {
public function tambah(){
	return view("mahasiswa.tambah_mahasiswa");
	}

public function prosesTambah(Request $request, Mahasiswa $mahasiswa){
	$mahasiswa->saveMhs($request->all());
	return redirect("mahasiswa");

	}

public function dataMahasiswa(){
	$mahasiswa=Mahasiswa::all()->sortBy('nim');

return view("mahasiswa.index")->with("datamahasiswa",$mahasiswa);
}

public function editMahasiswa($id){
	$mahasiswa=Mahasiswa::findOrFail($id);
	return view('mahasiswa.edit')->with('mahasiswa',$mahasiswa);
}

public function updateMahasiswa(Request $request, $id){
	Mahasiswa::findOrFail($id)->update($request->all());
	return redirect('mahasiswa');
}

public function	deleteMahasiswa($id){
	$mahasiswa=Mahasiswa::findOrFail($id);
	User::findOrFail($mahasiswa->id_user)->delete();
	return redirect('mahasiswa');
}

}
 