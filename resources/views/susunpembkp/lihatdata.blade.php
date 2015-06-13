@extends("template")
@section("content")
<link href="assets/print.css"b type='text/css' media="print">

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Dosen Pembimbing KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
	

<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<td>No.</td>
		<th>NIM</th>
		<th>Nama</th>
		<th>Program Studi</th>
		<th>Dosen Pembimbing KP</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=1; ?>
	@foreach($ppkp as $data)

	<tr>
		<td>{!! $no++ !!}</td>
		<td>{!! $data->mahasiswa->nim !!}</td>
		<td>{!! $data->mahasiswa->nama !!}</td>
		<td>{!! $data->mahasiswa->prodi->nama !!}</td>
		<td>{!! $data->dosen->nama !!}</td>
		<td><a href="{!! url('susunpembkp/batal/'.$data->id)!!}" class="btn btn-primary form-control">Cancel</a></td>
	</tr>
	@endforeach
</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->
		<div class="form-group">
			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembkp')!!}" class="btn btn-primary form-control">Kembali</a>
			</div>
			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembkp/printreguler')!!}" class="btn btn-primary form-control">Cetak SI reg</a>
			</div>
			<div class="col-md-2 pull-right">
				<a  href="{!! url('susunpembkp/printbilingual')!!}" class="btn btn-primary form-control" onclick='window.print()'>Cetak SI bil</a>
			</div>
		</div>

{!! Form::close() !!}

@stop