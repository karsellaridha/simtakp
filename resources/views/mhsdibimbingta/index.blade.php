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
			<th>Dosen Pembimbing</th>
			<th>Program Studi</th>
			<th>Judul Tugas Akhir</th>
			<th>Nilai Tugas AKhir 1 </th>
			<th>Nilai Tugas AKhir 2 </th>
			<th>Detail Nilai</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($datamhsbimbinganta as $data_bimbinganta)
		
		<tr>
			<td>{!!$data_bimbinganta->nim !!}</td>
			<td>{!!$data_bimbinganta->mahasiswa->nama!!}</td>
			<td>{!!$data_bimbinganta->dosen->nama!!}</td>
			<td>{!!$data_bimbinganta->mahasiswa->prodi->nama!!}</td>
			<td>{!!$data_bimbinganta->tempat_kp!!}</td>
			<td>{!! (count($data_bimbinganta->nilaita1)>0 ? $data_bimbinganta->nilaita1->total_nilaita1() : "Belum di input") !!}</td>
			<td><a href="{!! url("mhsdibimbingkp/detail/".$data_bimbinganta->nim) !!}">Lihat Detail</td>
			<td>
				<a href="{!! url("mhsdibimbingkp/bimbingankp/".$data_bimbinganta->id) !!}">Progress Bimbingan</a><br>
			</td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

