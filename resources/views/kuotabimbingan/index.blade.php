@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                	<h3 class="box-title">Input Kuota Bimbingan</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

<div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>NIP</th>
		<th>Nama Dosen</th>
		<th>Kuota Bimbingan KP Tersedia</th>
		<th>Kuota Bimbingan TA Tersedia</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>

	@foreach($dosen as $data)
	<tr>
		<td>{!! $data->nip !!}</td>
		<td>{!! $data->nama !!}</td>
		<td>{!! @$data->kuotabimbingan()->kuota_kp !!}</td>
		<td>{!! @$data->kuotabimbingan()->kuota_ta !!}</td>
		<td><a href="{!! url("kuotabimbingan/input/".$data->nip)!!}" class="btn btn-primary">{!! (count($data->kuotabimbingan())>0) ? "Edit" : "Input" !!}</a></td>
	</tr>
	@endforeach

	</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->


@stop