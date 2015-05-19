<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model {

	protected $table = 'prodi';
	protected $fillable	= ['id','nama'];
	public $timestamps = false;
	public function mahasiswa(){
		return $this->hasMany('App\Prodi','id_prodi');
	}

}
