<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class NilaiTa1 extends Model {

	protected $table = 'nilai_ta1';
	protected $fillable	= [
	'nim',
	'nip',
	'persentasi',
	'kesesuaian_format',
	'bahasa_indonesia',
	'kesesuaian_isi',
	'kelengkapan_dokumen',
	'analisis',
	'metodologi',
	'basisdata',
	'office',
	'os',
	'jaringan',
	'sikap_etika',
	'penilaian_proses'
	];
	public $timestamps = false;
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function dosen(){
		return $this->belongsTo('App\Dosen','nip','nip');
	}

}
