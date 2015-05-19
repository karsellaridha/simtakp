<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\HttpResponse;
use  Illuminate\Http\Request;

use App\Inputnilaikp;
use App\Pengajuanpembkp;
use App\Dosen;
use App\Mahasiswa;
use Auth;

class InputnilaikpController extends Controller {


	public function index(){
		$nim=Auth::user()->mahasiswa->nim;
		$nilaikp=Inputnilaikp::where("nim","=",$nim)->first();
		return view('inputnilaikpmhs.index')->with('inputnilaikp',$nilaikp);

	}

	public function input(){
	return view("inputnilaikpmhs.input");
	}

	public function prosesInput(Request $request, Inputnilaikp $nilaikp){

		$file=$request->file('file_nilai');


	if ($file->isValid() ) {

      $destinationPath = 'nilaikplapangan'; // upload path
      $extension = $file->getClientOriginalExtension(); // getting image extension
      $fileName = $file->getClientOriginalName().'.'.$extension; // renameing image
      $file->move($destinationPath, $fileName); // uploading file to given path
     
      // sending back with message
   	 	$insert = $request->except('file_nilai');
    	$insert['file_nilai'] = $destinationPath."/".$fileName;
    	$insert['nim'] = Auth::user()->mahasiswa->nim;
    	$insert['id_pengajuanpembkp'] = Pengajuanpembkp::where('nim','=',Auth::user()->mahasiswa->nim)->first()->id;
 		$nilaikp->firstOrNew(['nim'=>Auth::user()->mahasiswa->nim]);
 		$nilaikp->fill($insert);
 		$nilaikp->save();
      return redirect("inputnilaikpmhs");
    }
    else {
      // sending back with error message.
      return redirect('inputnilaikpmhs');
    }

	}

	public function inputdosen($id){
		return view("inputnilaikpdosen.inputdosen");
	}

	public function prosesInputdosen(Request $request,$id){

	}

}
 