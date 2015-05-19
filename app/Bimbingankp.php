<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;


class Bimbingankp extends Model {

	protected $table = 'bimbingan_kp';
	protected $fillable	= ['nim','nip','tanggal','hasil_konsultasi', 'id_pengajuanpembkp'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function pengajuanpembkp(){
		return $this->hasOne('App\Pengajuanpembkp','id_pengajuanpembkp');
	}

	public function saveMhs($data){
		return DB::transaction(function()use($data){
			$user=User::create(['username'=> $data['nim'], 'password'=> bcrypt($data['nim']), 'role'=> 'mahasiswa']);
			$data['id_user']=$user->id;
			Mahasiswa::create($data);
		});

	}
}
