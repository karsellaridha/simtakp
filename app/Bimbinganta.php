<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use DB;


class Bimbinganta extends Model {

	protected $table = 'bimbingan_ta';
	protected $fillable	= ['nim','nip','tanggal','hasil_konsultasi', 'id_pengajuanpembta'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function pengajuanpembta(){
		return $this->hasOne('App\Pengajuanpembta','id_pengajuanpembta');
	}

	
}
