@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                @if(Auth::user()->role == "ketua jurusan")
                  <h3 class="box-title">Laporan Mahasiswa yang Telah Ambil TA</h3>
                @endif
                @if(Auth::user()->role == "dosen")
                  <h3 class="box-title">Laporan Progress Bimbingan TA Mahasiswa yang Dibimbing</h3>
                @endif
                </div><!-- /.box-header -->
				<div class="box-body">

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Pembimbing 1</th>
			<th>Pembimbing 2</th>
			<th>Program Studi</th>
			<th>Judul TA</th>
			<th>Nilai TA 1 </th>
			<th>Nilai TA 2 </th>
	@if($tahun)
			<th>No.SK</th>
	@endif
		@if(!$tahun)
			<th>Nilai</th>
			<th>Aksi</th>
		@endif
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($datamhsbimbinganta as $data_bimbinganta)
		
		<tr>
			<td>{!! $no++ !!}</td>
			<td>{!!$data_bimbinganta->nim !!}</td>
			<td>{!!$data_bimbinganta->mahasiswa->nama!!}</td>
			<td>{!!$data_bimbinganta->data_pembimbing_1->nama!!}</td>
			<td>{!!@$data_bimbinganta->data_pembimbing_2->nama!!}</td>
			<td>{!!$data_bimbinganta->mahasiswa->prodi->nama!!}</td>
			<?php $j = $psta->where('nim','=',$data_bimbinganta->nim)->first()?>
			<td>{!! (isset($j->judul)) ? 
					$j->judul :
					$data_bimbinganta->judul." <span class='label label-danger'>belum fix</span>";
			 !!}</td>
			 <?php $ta1 = $nilaita1->nilaiTotal($data_bimbinganta->nim);
			 	   $ta2 = $nilaita2->nilaiTotal($data_bimbinganta->nim); ?>
			<td>{!! $ta1['huruf'] !!}</td>
			<td>{!! $ta2['huruf'] !!}</td>

			@if($tahun)
			<td></td>
			@endif

			@if(!$tahun)
			<td><a href="{!! url("penilaian/detail/pembimbing/".$data_bimbinganta->nim) !!}">Penilaian</td>
			<td>
				<a href="{!! url("mhsdibimbingta/bimbinganta/".$data_bimbinganta->id) !!}">Progress Bimbingan</a><br>
			</td>
			@endif
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

