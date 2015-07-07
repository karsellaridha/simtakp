<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class VerifikasiUjianTa1 extends Model {

	protected $table = 'verifikasi_syaratujianta1';
	protected $fillable	= [
	'nim',
	'id_syarat_pengajuanujianta1',
	'ksm',
	'spp',
	'dkn',
	'ktm',
	'form_konsultasi',
	'rekomendasi_sidang',
	'tugas_akhir_1',
	'sk_pembimbing_ta'
	];
	public $timestamps = false;

}

