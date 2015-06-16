<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Verifikasisyaratkp extends Model {

	protected $table = 'verifikasi_syaratkp';
	protected $fillable	= [
	'id_pengajuan_syaratkp',
	'jumlah_sks',
	'id_transaksispp',
	'id_transaksidpl','lama_kp',
	'proposal_kp',
	'permohonan_kp',
	'kesediaan_membimbing',
	'no_sk'
	];
	public $timestamps = false;
	
	public function pskp(){
		return $this->belongsTo('App\Pengajuansyaratkp','id_pengajuan_syaratkp');
	}

}
