@extends("template")

@section("content")

	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Dosen</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
<p><a href="{!! URL::to('dosen/tambah')!!}" class="btn btn-primary pull-right">Tambah Dosen</a></p>
<div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Jabatan Akademik</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach($datadosen as $data_dosen)
		
		<tr>
			<td>{!! $no++ !!}</td>
			<td>{!!$data_dosen->nip!!}</td>
			<td>{!!$data_dosen->nama!!}</td>
			<td>{!!$data_dosen->jabatan!!}</td>
			<td>{!!$data_dosen->jabatan_akademik!!}</td>
			<td><a href="{!! URL::to('dosen/edit',$data_dosen->id)!!}">edit</a> | <a href="{!! URL::to('dosen',$data_dosen->id)!!}"onClick="return confirm('Hapus Data Dosen?')">hapus</a></td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

