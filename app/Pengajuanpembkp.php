<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengajuanpembkp extends Model {

	protected $table = 'pengajuan_pembkp';
	protected $fillable	= ['nim','nip','tempat_kp','tahun','status_pembimbing'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function bimbinganKp(){
		return $this->hasMany('App\Bimbingankp','id_pengajuanpembkp');
	}
}
