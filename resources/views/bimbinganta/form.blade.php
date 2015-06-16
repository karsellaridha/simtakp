		<div class="form-group">
			{!! Form::label('nip','NIP :') !!}
			{!! Form::text('nip',$nip,['class'=>'form-control','id'=>'nip','required','readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tanggal','Tanggal :') !!}
			{!! Form::input('date','tanggal',@$bimbinganta->tanggal,['class'=>'form-control','id'=>'tanggal','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('hasil_konsultasi','Hasil Konsultasi :') !!}
			{!! Form::textarea('hasil_konsultasi',@$bimbinganta->hasil_konsultasi,['class'=>'form-control','id'=>'hasil_konsultasi','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control','required']) !!}
		</div>
	