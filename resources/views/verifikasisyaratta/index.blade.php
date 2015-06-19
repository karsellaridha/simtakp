@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                	<h3 class="box-title">Verifikasi Pengajuan Syarat SK TA Mahasiswa</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

<div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>NIM</th>
		<th>Nama</th>
		<th>Dosen Pembimbing 1</th>
		<th>Dosen Pembimbing 2</th>
		<th>Judul TA</th>
		<th>No. SK TA</th>
		<th>Opsi</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>

	@foreach($psta as $data)
	<tr>
		<td>{!! $data->mahasiswa->nim !!}</td>
		<td>{!! $data->mahasiswa->nama !!}</td>
		<td>{!! @$data->ppta->data_pembimbing_1->nama!!}</td>
		<td>{!! @$data->ppta->data_pembimbing_2->nama!!}</td>
		<td>{!! @$data->judul !!}</td>
		<td>@if($data->verifikasi->no_sk==null)
		<a href="{!! url("verifikasisyaratta/$data->id/input_no_sk") !!}">Input</a></td>
		@else
			{!! $data->verifikasi->no_sk !!}
		@endif

		<td><a href="{!! url("verifikasisyaratta/$data->id/detail") !!}">Detail</a></td>
		<td><span class="label {!! ($data->status_syaratta=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $data->status_syaratta !!}</td>
		<td>
			@if(count($verifikasi->where("id_pengajuan_syaratta",'=',$data->id)->get())>0)
			<a href="{!! url("form_cetak/$data->id/cetak_verifikasi_ta")!!}">Cetak Hasil Verifikasi</a><br>
			<a href="{!! url("form_cetak/$data->id/surat_ambildata")!!}">Cetak Surat Izin Ambil Data</a><br>
			<a href="{!! url("form_cetak/$data->id/sk_ta")!!}">Cetak SK TA</a>
			@endif
		</td>
		
	</tr>
	@endforeach

	</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->


@stop