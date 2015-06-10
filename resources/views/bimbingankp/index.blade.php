@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan KP</h3>
                </div><!-- /.box-header -->

<center><table border="0" class="table">
	<tr>
		<td>NIM</td>
		<td>:</td> 
		<td>{!! Auth::user()->mahasiswa->nim !!}<td>
	</tr>
		<td>Nama</td>
		<td>:</td> 
		<td>{!! Auth::user()->mahasiswa->nama !!}<td>	
	<tr>
		<td>Dosen Pembimbing</td>
		<td>:</td> 
		<td>{!! Auth::user()->mahasiswa->pengajuanpembkp->dosen->nama !!}<td>
	</tr>
</table></center>

                <div class="box-body">
<p><a href="{!! URL::to('bimbingankp/tambah')!!}" class="btn btn-primary pull-right">Tambah Laporan Bimbingan</a></p>
<div class='clearfix'></div><br>

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Tanggal Bimbingan</th>
			<th>Hasil Konsultasi</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($databimbingankp as $data_bimbingankp)
		
		<tr>
			<td>{!! $no++ !!}</td>
			<td>{!!$data_bimbingankp->tanggal!!}</td>
			<td>{!!$data_bimbingankp->hasil_konsultasi!!}</td>
			<td><a href="{!! URL::to('bimbingankp/edit',$data_bimbingankp->id)!!}">edit</a> | <a href="{!! URL::to('bimbingankp',$data_bimbingankp->id)!!}" onClick="return confirm('Hapus Data Konsultasi KP?')">hapus</a></td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

