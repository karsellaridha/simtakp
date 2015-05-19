<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;
use App\Kuotabimbingan;

class Dosen extends Model {

	protected $table = 'dosen';
	protected $fillable	= ['nip','nama','jabatan','jabatan_akademik','id_user'];
	public $timestamps = false;

	public function pengajuanpembkp(){
		return $this->hasMany('App\Pengajuanpembkp','id_dosen');
	}

	public function saveDsn($data){
		return DB::transaction(function()use($data){
			$user=User::create(['username'=> $data['nip'], 'password'=> bcrypt($data['nip']), 'role'=> 'dosen']);
			$data['id_user']=$user->id;
			Dosen::create($data);
		});

	}

	public function dosen(){
		return $this->hasOne('App\Bimbingankp','id_dosen');
	}

	public function kuotabimbingan(){
		$kuotabimbingan=Kuotabimbingan::where('nip','=', $this->nip)->where('tahun','=',date('Y'))->first();
		return $kuotabimbingan;
	}

	public function jumlahbimbingankp(){
		$jumlahbimbingan=0;
		$jumlahbimbingan=Pengajuanpembkp::where('nip','=', $this->nip)->where('tahun','=',date('Y'))->count();
		return $jumlahbimbingan;
	}
	public function sisakuotakp(){
		return $this->kuotabimbingan()->kuota_kp - $this->jumlahbimbingankp();
	}

/*
	public function jumlahbimbinganta(){
		$jumlahbimbingan=0;
		$jumlahbimbingan=Pengajuanpembta::where('nip','=', $this->nip)->where('tahun','=',date('Y'))->count();
		return $jumlahbimbingan;
	}
*/
	public function sisakuotata(){
		return 0;
	}


}
