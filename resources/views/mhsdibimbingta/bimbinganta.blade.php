@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan TA Mahasiswa</h3>
                </div><!-- /.box-header -->

<center><table border="0" class="table">
	<tr>
		<td>NIM</td>
		<td>:</td> 
		<td>{!! $datamhsbimbinganta->nim !!}<td>
	</tr>
		<td>Nama</td>
		<td>:</td> 
		<td>{!! $datamhsbimbinganta->mahasiswa->nama !!}<td>
	</tr>	
	<tr>
		<td>Dosen Pembimbing 1</td>
		<td>:</td> 

		<td>{!!$datamhsbimbinganta->data_pembimbing_1->nama !!}<td>
	</tr>
	<tr>
		<td>Dosen Pembimbing 2</td>
		<td>:</td> 
		<td>{!!@$datamhsbimbinganta->data_pembimbing_2->nama !!}<td>
	</tr>
</table></center>

                <div class="box-body">
<div class='clearfix'></div><br>

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>Tanggal Bimbingan</th>
			<th>Hasil Konsultasi</th>
			<th>Dosen</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($datamhsbimbinganta->bimbinganTa as $data_bimbinganta)
		
		<tr>
			<td>{!!$data_bimbinganta->tanggal!!}</td>
			<td>{!!$data_bimbinganta->hasil_konsultasi!!}</td>
			<th>{!!$data_bimbinganta->dosen->nama!!}</th>
			
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="modal-footer">

                  </div>


@stop

