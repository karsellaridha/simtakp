@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Verifikasi Ujian Proposal TA</h3>
                </div><!-- /.box-header -->
  
   <div class="box-body">
   <div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
<thead>
<tr bgcolor="#CCCCCC">

	<td>No.</td>
	<td>NIM</td>
	<td>Nama</td>
	<td>Status</td>
	<td>Aksi</td>
	<td>Opsi</td>
</tr>
</thead>

<tbody>
	<?php $no=1; ?>
	@foreach($pengajuanUjian as $p)
<tr>
	<td>{!! $no++ !!}</td>
	<td>{!! $p->nim !!}</td>
	<td>{!! $p->mahasiswa->nama !!}</td>
	<td><span class="label {!! ($p->status=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $p->status !!}</span></td>
	<td><a href='{!! url("verifikasi_ujian/ta1/input/".$p->nim) !!}'>Detail</a></td>
	<td>cetak hasil verifikasi</td>
</tr>
	@endforeach
</tbody>
</table>

   </div>

</div>


@stop