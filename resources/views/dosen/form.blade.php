
		<div class="form-group">
			{!! Form::label('nip','NIP :') !!}
			{!! Form::text('nip',@$dosen->nip,['class'=>'form-control','id'=>'nip','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nama','Nama :') !!}
			{!! Form::text('nama',@$dosen->nama,['class'=>'form-control','id'=>'nama','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('jabatan','Jabatan :') !!}
			{!! Form::select('jabatan', ['Lektor'=>'Lektor','Asisten Ahli'=>'Asisten Ahli'], @$dosen->jabatan, ['id'=>'jabatan', 'class'=>'form-control','required'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('jabatan_akademik','Jabatan Akademik :') !!}
			{!! Form::select('jabatan_akademik', ['Ketua Jurusan'=>'Ketua Jurusan','Sekretaris Jurusan'=>'Sekretaris Jurusan','Dosen'=>'Dosen','Dekan'=>'Dekan','Pembantu Dekan 1'=>'Pembantu Dekan 1','Pembantu Dekan 2'=>'Pembantu Dekan 2','Pembantu Dekan 3'=>'Pembantu Dekan 3'], @$dosen->jabatan_akademik, ['id'=>'jabatan_akademik', 'class'=>'form-control','required'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control','required']) !!}
		</div>
	