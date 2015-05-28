
		<div class="form-group">
			{!! Form::label('judul_kp','Judul Laporan KP :') !!}
			{!! Form::text('judul_kp',@$nilaikp->judul_kp,['class'=>'form-control','id'=>'judul_kp'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('pemb_lapangan','Pembimbing Lapangan :') !!}
			{!! Form::text('pemb_lapangan',@$nilaikp->pemb_lapangan,['class'=>'form-control','id'=>'pemb_lapangan'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('nilai_pemblapangan','Jumlah Nilai Pembimbing Lapangan :') !!}
			{!! Form::text('nilai_pemblapangan',@$nilaikp->nilai_pemblapangan,['class'=>'form-control','id'=>'nilai_pemblapangan'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('file_nilai','Form Penilaian Pembimbing :') !!}
			{!! Form::file('file_nilai',['class'=>'form-control','id'=>'file_nilai']) !!}
			<span style="font-size:10pt; color:red;">File PDF max.200kb | Format nama file : NIM_NAMA_ANGKATAN</span>
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>