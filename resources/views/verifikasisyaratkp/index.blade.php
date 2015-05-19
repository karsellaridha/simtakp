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
		<th>NIM</th>
		<th>Nama</th>
		<th>Dosen Pembimbing</th>
		<th>Tempat KP</th>
		<th>Opsi</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>

	@foreach($pskp as $data)
	<tr>
		<td>{!! $data->nim !!}</td>
		<td>{!! $data->mahasiswa->nama !!}</td>
		<td>{!! $data->ppkp->dosen->nama!!}</td>
		<td>{!! $data->ppkp->tempat_kp !!}</td>
		<td><a href="{!! url("verifikasisyaratkp/$data->id/detail") !!}">Detail</a></td>
		<td><span class="label {!! ($data->status_syaratkp=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $data->status_syaratkp !!}</td>
		<td>
			@if(count($verifikasi->where("id_pengajuan_syaratkp",'=',$data->id)->get())>0)
			<a href="{!! url('#')!!}">Cetak Hasil Verifikasi</a><br>
			<a href="{!! url('#')!!}">Cetak Surat Izin KP</a>
			@endif
		</td>
		
	</tr>
	@endforeach

	</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->


@stop