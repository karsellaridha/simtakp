@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan KP Mahasiswa yang Dibimbing</h3>
                </div><!-- /.box-header -->
				<div class="box-body">

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>NIM</th>
			<th>Nama</th>
			<th>Dosen Pembimbing</th>
			<th>Tempat KP</th>
			<th>Nilai KP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($datamhsbimbingankp as $data_bimbingankp)
		
		<tr>
			<td>{!!$data_bimbingankp->nim !!}</td>
			<td>{!!$data_bimbingankp->mahasiswa->nama!!}</td>
			<td>{!!$data_bimbingankp->dosen->nama!!}</td>
			<td>{!!$data_bimbingankp->tempat_kp!!}</td>
			<td>Nilai KP</td>
			<td>
				<a href="{!! url("mhsdibimbingkp/bimbingankp/".$data_bimbingankp->id) !!}">Progress Bimbingan</a><br>
				<a href="{!! url("inputnilaikpdosen/".$data_bimbingankp->id) !!}">Input Nilai KP</a>
			</td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

