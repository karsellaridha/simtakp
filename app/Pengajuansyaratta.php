<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengajuansyaratta extends Model {

	protected $table = 'pengajuan_syaratta';
	protected $fillable	= ['nim','no_hp','id_pengajuan_pembkp','jumlah_sks','id_transaksispp','id_transaksidpl','lama_kp','status_syaratkp'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function ppkp(){
		return $this->belongsTo('App\Pengajuanpembkp','id_pengajuan_pembta');
	}

	public function verifikasi(){
		return $this->hasOne('App\Verifikasisyaratkp','id_pengajuan_syaratkp');
	}

}
