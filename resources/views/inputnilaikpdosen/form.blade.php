		<div class="form-group">
			{!! Form::label('nim','NIM :') !!}
			{!! Form::text('nim',@$nilaikp->mahasiswa->nim,['class'=>'form-control','id'=>'nim'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('kesesuaian_laporan','Kesesuaian Laporan dengan Format :') !!}
			{!! Form::text('kesesuaian_laporan',@$nilaikp->kesesuaian_laporan,['class'=>'form-control','id'=>'kesesuaian_laporan'])!!}
			<span style="font-size:10pt; color:red;">point nilai 30%</span>
		</div>

		<div class="form-group">
			{!! Form::label('penguasaan_materi','Jumlah Penguasaan Materi KP :') !!}
			{!! Form::text('penguasaan_materi',@$nilaikp->penguasaan_materi,['class'=>'form-control','id'=>'penguasaan_materi'])!!}
			<span style="font-size:10pt; color:red;">point nilai 30%</span>
		</div>

		<div class="form-group">
			{!! Form::label('analisis_perancangan','Analisis dan Perancangan :') !!}
			{!! Form::text('analisis_perancangan',@$nilaikp->analisis_perancangan,['class'=>'form-control','id'=>'analisis_perancangan']) !!}
			<span style="font-size:10pt; color:red;">point nilai 30%</span>
		</div>

		<div class="form-group">
			{!! Form::label('sikap_etika','Sikap dan Etika :') !!}
			{!! Form::text('sikap_etika',@$nilaikp->sikap_etika,['class'=>'form-control','id'=>'sikap_etika']) !!}
			<span style="font-size:10pt; color:red;">point nilai 10%</span>
		</div>
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	
	