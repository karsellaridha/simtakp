<?php namespace App\Http\Middleware;

use Closure;
use DB;
use Auth;

class CekIzinAksesHalaman {



	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{	
		$path =  $request->path();
		$nim = Auth::user()->mahasiswa->nim;
		$cek = " ";
		
		if($path == 'pengajuansyaratkp'):
				
			$cek = DB::table('pengajuan_pembkp')
			->where('nim','=',$nim)
			->where('status_pembimbing','=','disetujui')->first();

		endif;

		if($path == 'bimbingankp' or $path == 'inputnilaikpmhs'):
				
			$cek = DB::table('pengajuan_syaratkp')
			->where('nim','=',$nim)
			->where('status_syaratkp','=','diverifikasi')->first();

		endif;

		if($path == 'pengajuanpembta'):
				
			$cek = DB::table('nilai_kp')
			->where('nim','=',$nim)
			->first();

		endif;

		if($path == 'pengajuanpembta'):
				
			$cek = DB::table('nilai_kp')
			->where('nim','=',$nim)
			->first();

		endif;

		if($path == 'pengajuansyaratta'):
				
			$cek = DB::table('pengajuan_pembta')
			->where('nim','=',$nim)
			->where('status_pembimbing','=','disetujui')->first();

		endif;

		if($path == 'bimbinganta' or $path == 'ujian_ta'):
				
			$cek = DB::table('pengajuan_syaratta')
			->where('nim','=',$nim)
			->where('status_syaratta','=','diverifikasi')->first();

		endif;

		if(count($cek)>0){
			return $next($request);
		}else{
			return view('not_allowed');
		}
	}

}
