@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan KP Mahasiswa</h3>
                </div><!-- /.box-header -->

<center><table border="0" class="table">
	<tr>
		<td>NIM</td>
		<td>:</td> 
		<td>{!! $datamhsbimbingankp->nim !!}<td>
	</tr>
		<td>Nama</td>
		<td>:</td> 
		<td>{!! $datamhsbimbingankp->mahasiswa->nama !!}<td>	
	<tr>
		<td>Dosen Pembimbing</td>
		<td>:</td> 
		<td>{!!$datamhsbimbingankp->dosen->nama !!}<td>
	</tr>
</table></center>

                <div class="box-body">
<div class='clearfix'></div><br>

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>Tanggal Bimbingan</th>
			<th>Hasil Konsultasi</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($datamhsbimbingankp->bimbinganKp as $data_bimbingankp)
		
		<tr>
			<td>{!!$data_bimbingankp->tanggal!!}</td>
			<td>{!!$data_bimbingankp->hasil_konsultasi!!}</td>
			
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="modal-footer">

                  </div>


@stop

