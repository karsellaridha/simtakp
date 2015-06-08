<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Pengajuansyaratta extends Model {

	protected $table = 'pengajuan_syaratta';
	protected $fillable	= ['nim','judul','no_hp','id_pengajuan_pembta','jumlah_sks','id_transaksispp','id_transaksidpl','ktm','proposal_ta','tanda_kp','kesediaan_membimbing','persetujuan_ta','sk_pemb','permohonan_ambildata','status_syaratta'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function ppta(){
		return $this->belongsTo('App\Pengajuanpembta','id_pengajuan_pembta');
	}

	public function verifikasi(){
		return $this->hasOne('App\Verifikasisyaratta','id_pengajuan_syaratta');
	}

}
