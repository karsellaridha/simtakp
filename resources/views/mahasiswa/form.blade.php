	<?php use App\Prodi;
		$prodi=Prodi::lists("nama","id");
	?>

		<div class="form-group">
			{!! Form::label('nim','NIM :') !!}
			{!! Form::text('nim',@$mahasiswa->nim,['class'=>'form-control','id'=>'nim','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nama','Nama :') !!}
			{!! Form::text('nama',@$mahasiswa->nama,['class'=>'form-control','id'=>'nama','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('jenis_kelamin','Jenis Kelamin :') !!}
			{!! Form::select('jenis_kelamin', ['laki-laki'=>'Laki-laki','perempuan'=>'Perempuan'], @$mahasiswa->jenis_kelamin, ['id'=>'jenis_kelamin', 'class'=>'form-control','required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('prodi','Prodi :') !!}
			{!! Form::select('id_prodi', $prodi,null,['id'=>'prodi', 'class'=>'form-control','required'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control','required']) !!}
		</div>
	