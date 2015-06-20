<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	public function ubahPassword(){
		return view('auth.ubahpassword');
	}

	public function prosesUbah($id, Request $request){
		$user=User::findOrFail($id);

		if(password_verify($request->input('passwordlama'),$user->password)==1 AND $request->input('passwordbaru')==$request->input('confirmpasswordbaru')){
			$user->password=bcrypt($request->input('passwordbaru'));
			$user->update();

			return redirect('auth/logout');
		}
	}
}
