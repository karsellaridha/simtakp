@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                	<h3 class="box-title">Verifikasi Pengajuan Syarat KP Mahasiswa</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

<div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Dosen Pembimbing</th>
		<th>Tempat KP</th>
		<th>No. SK KP</th>
		<th>Opsi</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>

	<?php $no=1; ?>
	@foreach($pskp as $data)
	<tr>
		<td>{!! $no++ !!}
		<td>{!! $data->nim !!}</td>
		<td>{!! $data->mahasiswa->nama !!}</td>
		<td>{!! $data->ppkp->dosen->nama!!}</td>
		<td>{!! $data->ppkp->tempat_kp !!}</td>

		<td>@if($data->verifikasi->no_sk==null)
		<a href="{!! url("verifikasisyaratkp/$data->id/input_no_sk") !!}">Input</a></td>
		@else
			{!! $data->verifikasi->no_sk !!}
			| <a href="{!! url("verifikasisyaratkp/$data->id/input_no_sk") !!}">Edit</a>
		@endif

		<td><a href="{!! url("verifikasisyaratkp/$data->id/detail") !!}">Detail</a></td>

		<td><span class="label {!! ($data->status_syaratkp=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $data->status_syaratkp !!}</td>

		<td>
			@if(count($verifikasi->where("id_pengajuan_syaratkp",'=',$data->id)->get())>0)
			<a href="{!! url("form_cetak/$data->id/cetak_verifikasi_kp")!!}">Cetak Hasil Verifikasi</a><br>
			<a href="{!! url("form_cetak/$data->id/surat_izin_kp")!!}">Cetak Surat Izin KP</a><br>
			<a href="{!! url("form_cetak/$data->id/sk_kp")!!}">Cetak SK KP</a>
			@endif
		</td>
		
	</tr>
	@endforeach

	</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->


@stop
