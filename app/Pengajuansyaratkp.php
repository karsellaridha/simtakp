<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengajuansyaratkp extends Model {

	protected $table = 'pengajuan_syaratkp';
	protected $fillable	= ['nim','id_pengajuan_pembkp','jumlah_sks','id_transaksispp','id_transaksidpl','lama_kp','status_syaratkp'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function ppkp(){
		return $this->belongsTo('App\Pengajuanpembkp','id_pengajuan_pembkp');
	}

	public function verifikasi(){
		return $this->hasOne('App\Verifikasisyaratkp','id_pengajuan_syaratkp');
	}

}
