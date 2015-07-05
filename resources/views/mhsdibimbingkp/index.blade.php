@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                @if(Auth::user()->role == "ketua jurusan")
                 @if($tahun)
			  	 	<h3 class="box-title">Laporan Mahasiswa yang Telah Ambil KP Tahun {!! $tahunnya !!}</h3>
				 @else
				 	<h3 class="box-title">Laporan Mahasiswa yang Telah Ambil KP</h3>
				 @endif
                @endif
                @if(Auth::user()->role == "dosen")
                  <h3 class="box-title">Laporan Progress Bimbingan KP Mahasiswa yang Dibimbing</h3>
                @endif
                </div><!-- /.box-header -->
				<div class="box-body">

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Dosen Pembimbing</th>
			<th>Program Studi</th>
			<th>Tempat KP</th>
			<th>Nilai KP</th>
			<th>Detail Nilai</th>
	@if($tahun)
			<th>No.SK</th>
	@endif

	@if(!$tahun)
			<th>Aksi</th>
	@endif
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($datamhsbimbingankp as $data_bimbingankp)
		
		<tr>
			<td>{!! $no++ !!}</td>
			<td>{!!$data_bimbingankp->nim !!}</td>
			<td>{!!$data_bimbingankp->mahasiswa->nama!!}</td>
			<td>{!!$data_bimbingankp->dosen->nama!!}</td>
			<td>{!!$data_bimbingankp->mahasiswa->prodi->nama!!}</td>
			<td>{!!$data_bimbingankp->tempat_kp!!}</td>
			<td>{!! (count($data_bimbingankp->nilaikp)>0 ? $data_bimbingankp->nilaikp->total_nilaikp() : "Belum di input") !!}</td>
			<td><a href="{!! url("mhsdibimbingkp/detail/".$data_bimbingankp->nim) !!}">Lihat Detail</td>
			@if($tahun)
			<td>{!!$data_bimbingankp->pskp->verifikasi->no_sk!!}</td>
			@endif

			@if(!$tahun)
			<td>
				<a href="{!! url("mhsdibimbingkp/bimbingankp/".$data_bimbingankp->id) !!}">Progress Bimbingan</a><br>
				@if(Auth::user()->role=="dosen")
				{!! (count($data_bimbingankp->nilaikp)>0 ? "<a href='".url('inputnilaikpdosen/'.$data_bimbingankp->nim)."'>Input Nilai KP</a>" : "") !!}
				@endif
			</td>
			@endif
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

