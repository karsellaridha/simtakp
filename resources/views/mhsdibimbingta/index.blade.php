@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan TA Mahasiswa yang Dibimbing</h3>
                </div><!-- /.box-header -->
				<div class="box-body">

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>NIM</th>
			<th>Nama</th>
			<th>Pembimbing 1</th>
			<th>Pembimbing 2</th>
			<th>Program Studi</th>
			<th>Judul TA</th>
			<th>Nilai TA 1 </th>
			<th>Nilai TA 2 </th>
			<th>Nilai</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($datamhsbimbinganta as $data_bimbinganta)
		
		<tr>
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
			 <?php $ta1 = $nilaita1->nilaiTotal($data_bimbinganta->nim) ?>
			<td>{!! $ta1['huruf'] !!}</td>
			<td></td>
			<td><a href="{!! url("mhsdibimbingta/detail/".$data_bimbinganta->nim) !!}">Penilaian</td>
			<td>
				<a href="{!! url("mhsdibimbingta/bimbinganta/".$data_bimbinganta->id) !!}">Progress Bimbingan</a><br>
			</td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

