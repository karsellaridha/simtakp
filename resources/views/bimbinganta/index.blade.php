@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Progress Bimbingan TA Pembimbing</h3>
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
		<td>Pembimbing 1</td>
		<td>:</td> 
		<td>{!! Auth::user()->mahasiswa->pengajuanpembta->data_pembimbing_1->nama !!}<td>
	</tr>
	<tr>
		<td>Pembimbing 2</td>
		<td>:</td> 
		<td>{!! @Auth::user()->mahasiswa->pengajuanpembta->data_pembimbing_2->nama !!}<td>
	</tr>
</table></center>

                <div class="box-body">
<p><a href='{!! URL::to("bimbinganta/tambah/".Auth::user()->mahasiswa->pengajuanpembta->data_pembimbing_1->nip)!!}' class="btn btn-primary pull-right">Tambah Laporan Bimbingan 1</a></p>

@if(isset(Auth::user()->mahasiswa->pengajuanpembta->data_pembimbing_2->nama))
<p><a href="{!! URL::to("bimbinganta/tambah")!!}" class="btn btn-primary pull-right">Tambah Laporan Bimbingan 2</a></p>
@endif

<div class='clearfix'></div><br>

<table class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Pembimbing</th>
			<th>Tanggal Bimbingan</th>
			<th>Hasil Konsultasi</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($databimbinganta as $data_bimbinganta)
		
		<tr>
			<th>{!! $no++ !!}</th>
			<th>{!!$data_bimbinganta->dosen->nama!!}</th>
			<td>{!!$data_bimbinganta->tanggal!!}</td>
			<td>{!!$data_bimbinganta->hasil_konsultasi!!}</td>
			<td><a href="{!! URL::to('bimbinganta/edit',$data_bimbinganta->id)!!}">edit</a> | <a href="{!! URL::to('bimbinganta',$data_bimbinganta->id)!!}" onClick="return confirm('Hapus Data Konsultasi TA?')">hapus</a></td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

