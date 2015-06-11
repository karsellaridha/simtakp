<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class PengajuanSyaratUjianTa2 extends Model {

	protected $table = 'pengajuan_syaratujianta2';
	protected $fillable	= [
		'nim',
		'status',
		'jadwal',
		'tempat_sidang',
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

	public function getStatusAttribute($value)
    {	
    	$status='';
    	switch ($value) {
    		case '1':
    			$status = "Diajukan";
    			break;
    		case '2':
    			$status = "Diverifikasi";
    			break;
    		case '3':
    			$status = "Selesai";
    			break;	
    	}

        return $status;
    }
	
	public function mahasiswa(){
		return $this->belongsTo('App\Mahasiswa','nim','nim');
	}


}
