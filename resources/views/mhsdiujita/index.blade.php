@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Menguji Ujian TA mahasiswa</h3>
                </div><!-- /.box-header -->
				<div class="box-body">

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Dosen Pembimbing 1</th>
			<th>Dosen Pembimbing 2</th>
			<th>Program Studi</th>
			<th>Judul Tugas Akhir</th>
			<th>Nilai Tugas AKhir 1 </th>
			<th>Nilai Tugas AKhir 2 </th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($datamhsbimbinganta as $as)
		<?php $data_bimbinganta = $pengajuanpembta->where('nim','=',$as->nim)->first() ?>
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
			 <?php $ta1 = $nilaita1->nilaiTotal($data_bimbinganta->nim) ?>
			<td>{!! $ta1['huruf'] !!}</td>
			<td></td>
			<td><a href="{!! url("penilaian/detail/penguji/".$data_bimbinganta->nim) !!}">Penilaian</td>
			
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

