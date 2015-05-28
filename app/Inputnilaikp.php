<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Inputnilaikp extends Model {

	protected $table = 'nilai_kp';
	protected $fillable	= ['nim','judul_kp','id_pengajuanpembkp','pemb_lapangan','nilai_pemblapangan','file_nilai','kesesuaian_laporan','penguasaan_materi','analisis_perancangan','sikap_etika','nilai_dosbing'];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

	public function nilai_totalpemblapangan(){
		return $this->nilai_pemblapangan;
	}

	public function nilai_totaldosbing(){
		return ($this->kesesuaian_laporan*0.3)+($this->penguasaan_materi*0.3)+($this->analisis_perancangan*0.3)+($this->sikap_etika*0.1);
	}

	public function total_nilaikp(){
		return ($this->nilai_totalpemblapangan()*0.4)+($this->nilai_totaldosbing()*0.6);
	}

}
