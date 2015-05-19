<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Inputnilaikp extends Model {

	protected $table = 'nilai_kp';
	protected $fillable	= ['nim','id_pengajuanpembkp','pemb_lapangan','nilai_pemblapangan','file_nilai','kesesuaian_laporan','penguasaan_materi','analisis_perancangan','sikap_etika','nilai_dosbing'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

}
