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

	public function nilaiTotal($nim){
		$nilaiTotal = array();
		$data = $this->where('nim','=',$nim)->get();

		$nilai_angka = 0;
		$banyak = 0;
		foreach ($data as $key => $value) {
			$nilai_angka += $this->hitungNilai($value);
			$banyak++;
		}

		$nilai_angka = $nilai_angka/$banyak;
		$nilai_huruf = $this->nilaiHuruf($nilai_angka);

		$nilaiTotal['angka'] = $nilai_angka;
		$nilaiTotal['huruf'] = $nilai_huruf;
		
		
		return $nilaiTotal;
	}

	private function nilaiHuruf($nilai){
		$return = "";
		
		if($nilai<41){
			$return = "E";
		}elseif($nilai>=41 AND $nilai<=55){
			$return = "D";
		}elseif($nilai>=56 AND $nilai<=70){
			$return = "C";
		}elseif ($nilai>=71 AND $nilai<=85) {
			$return = "B";
		}elseif ($nilai>=86) {
			$return = "A";
		}

		return $return;
	}

	private function hitungNilai($nilai){
		$total = 0;
		$total += $nilai->persentasi *0.05;
		$total += $nilai->kesesuaian_format *0.05;
		$total += $nilai->bahasa_indonesia *0.05;
		$total += $nilai->kesesuaian_isi *0.05;
		$total += $nilai->kelengkapan_dokumen *0.05;
		$total += $nilai->analisis *0.2;
		$total += $nilai->metodologi *0.2;
		$total += $nilai->basisdata *0.1;
		$total += $nilai->office *0.05;
		$total += $nilai->os *0.05;
		$total += $nilai->jaringan *0.05;
		$total += $nilai->sikap_etika *0.1;
		$total += $nilai->penilaian_proses *0.15;

		return $total;

	}

	public function sudahInput($nim){
		$dosen = $this->where('nim','=',$nim)->get();
		$data = array();
		foreach ($dosen as $key => $value) {
			$data[] = $value->dosen;
		}
		return $data;
	}

}
