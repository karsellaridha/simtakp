<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class PengajuanSyaratUjianTa1 extends Model {

	protected $table = 'pengajuan_syaratujianta1';
	protected $fillable	= [
		'nim',
		'status',
		'jadwal',
		'tempat_sidang',
		'ksm',
		'spp',
		'dkn',
		'ktm',
		'form_konsultasi',
		'rekomendasi_sidang',
		'tugas_akhir_1',
		'sk_pembimbing_ta'
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
