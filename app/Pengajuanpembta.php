<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengajuanpembta extends Model {

	protected $table = 'pengajuan_pembta';
	protected $fillable	= ['nim','pembimbing_1','pembimbing_2','judul','tahun','status_pembimbing'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function pembimbing_1(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function pembimbing_2(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function bimbinganta(){
		return $this->hasMany('App\Bimbinganta','id_pengajuanpembta');
	}

	public function nilaita(){
		return $this->hasOne('App\Inputnilaita','id_pengajuanpembta');
	}
}
