<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class VerifikasiUjianTa2 extends Model {

	protected $table = 'verifikasi_syaratujianta2';
	protected $fillable	= [
		'nim',
		'id_syarat_pengajuanujianta2',
		'ksmktm',
		'biaya_ujian',
		'dkn',
		'sertifikat',
		'suliet',
		'printscreen_suliet',
		'rekomendasi',
		'form_ta1',
		'eksemplar',
		'bebas_pustaka',
		'bebas_bayaran',
		'sk_ta'
	];
	public $timestamps = false;

}
