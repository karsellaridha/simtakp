<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class PengujiUjianTa extends Model {

	protected $table = 'penguji_ujian_ta';
	protected $fillable	= ['nim','penguji_1','penguji_2'];
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}

	public function data_penguji_1(){
		return $this->belongsTo('App\Dosen','penguji_1','nip');
	}

	public function data_penguji_2(){
		return $this->belongsTo('App\Dosen','penguji_2','nip');
	}
}
