@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Dosen Pembimbing KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
	

<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Dosen Pembimbing 1 TA</th>
		<th>Dosen Pembimbing 2 TA</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=1; ?>
	@foreach($ppta as $data)

	<tr>
		<td>{!! $no++ !!}</td>
		<td>{!! $data->mahasiswa->nim !!}</td>
		<td>{!! $data->mahasiswa->nama !!}</td>
		<td>{!! $data->data_pembimbing_1->nama !!}</td>
		<td>{!! @$data->data_pembimbing_2->nama !!}</td>
		<td><a href="{!! url('susunpembta/batal/'.$data->id)!!}" class="btn btn-primary form-control">Cancel</a></td>
	</tr>
	@endforeach
</tbody>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->
		<div class="form-group">
			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembta')!!}" class="btn btn-primary form-control">Kembali</a>
			</div>
			<div class="col-md-2 pull-right">
				<a href="{!! url('form_cetak/printreguler_ta')!!}" class="btn btn-primary form-control">Cetak SI reg</a>
			</div>
			<div class="col-md-2 pull-right">
				<a  href="{!! url('form_cetak/printbilingual_ta')!!}" class="btn btn-primary form-control" onclick='window.print()'>Cetak SI bil</a>
			</div>
		</div>

{!! Form::close() !!}

@stop