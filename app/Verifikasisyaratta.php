<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Verifikasisyaratta extends Model {

	protected $table = 'verifikasi_syaratta';
	protected $fillable	= [
	'id_pengajuan_syaratta',
	'jumlah_sks',
	'id_transaksispp',
	'id_transaksidpl',
	'ktm',
	'proposal_ta',
	'tanda_kp',
	'kesediaan_membimbing',
	'persetujuan_ta',
	'sk_pemb',
	'permohonan_ambildata'
	];
	
	public $timestamps = false;
	
	public function pskp(){
		return $this->belongsTo('App\Pengajuansyaratta','id_pengajuan_syaratta');
	}

}
