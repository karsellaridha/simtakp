<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;


class Mahasiswa extends Model {

	protected $table = 'mahasiswa';
	protected $fillable	= ['nim','nama','jenis_kelamin','id_prodi', 'id_user'];
	public $timestamps = false;
	public function prodi(){
		return $this->belongsTo('App\Prodi','id_prodi');
	}
	public function pengajuanpembkp(){
		return $this->hasOne('App\Pengajuanpembkp','nim','nim');
	}

	public function saveMhs($data){
		return DB::transaction(function()use($data){
			$user=User::create(['username'=> $data['nim'], 'password'=> bcrypt($data['nim']), 'role'=> 'mahasiswa']);
			$data['id_user']=$user->id;
			Mahasiswa::create($data);
		});

	}

	public function bimbingankp(){
		return $this->hasOne('App\Bimbingankp','nim','nim');
	}
}
