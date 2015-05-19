@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Mahasiswa</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
<p><a href="{!! URL::to('mahasiswa/tambah')!!}" class="btn btn-primary pull-right">Tambah Mahasiswa</a></p>
<div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
		<thead>
		<tr bgcolor="#CCCCCC">
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Prodi</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($datamahasiswa as $data_mahasiswa)
		
		<tr>
			<td>{!!$data_mahasiswa->nim!!}</td>
			<td>{!!$data_mahasiswa->nama!!}</td>
			<td>{!!$data_mahasiswa->jenis_kelamin!!}</td>
			<td>{!!$data_mahasiswa->prodi->nama!!}</td>
			<td><a href="{!! URL::to('mahasiswa/edit',$data_mahasiswa->id)!!}">edit</a> | <a href="{!! URL::to('mahasiswa',$data_mahasiswa->id)!!}" onClick="return confirm('Hapus Data Mahasiswa?')">hapus</a></td>
		</tr>

		@endforeach
</tbody>
		
</table>

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

