

		<div class="form-group">
			{!! Form::label('tahun','Tahun :') !!}
			{!! Form::text('tahun',date('Y'),['class'=>'form-control','id'=>'tahun','readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nip','NIP :') !!}
			{!! Form::text('nip',$dosen->nip,['class'=>'form-control','id'=>'nip','readonly'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('nama','Nama Dosen :') !!}
			{!! Form::text('nama',$dosen->nama,['class'=>'form-control','id'=>'nama','readonly'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('kuota_kp','Kuota Bimbingan KP Tersedia:') !!}
			{!! Form::text('kuota_kp',@$dosen->kuotabimbingan()->kuota_kp,['class'=>'form-control','id'=>'kuota_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kuota_ta','Kuota Bimbingan TA Tersedia:') !!}
			{!! Form::text('kuota_ta',@$dosen->kuotabimbingan()->kuota_ta,['class'=>'form-control','id'=>'kuota_ta']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	