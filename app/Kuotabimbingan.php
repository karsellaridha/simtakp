<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Kuotabimbingan extends Model {

	protected $table = 'kuota_bimbingan';
	protected $fillable	= ['nip','kuota_kp','kuota_ta','tahun'];
	public $timestamps = false;

	public function dosen(){
		return $this->belongsTo('App\Dosen','id_dosen');
	}

	public function kuotabimbingan(){
		return $this->belongsTo('App\Kuotabimbingan','nip');
	}
}

