

		<div class="form-group">
			{!! Form::label('tanggal','Tanggal :') !!}
			{!! Form::input('date','tanggal',@$bimbingankp->tanggal,['class'=>'form-control','id'=>'tanggal','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('hasil_konsultasi','Hasil Konsultasi :') !!}
			{!! Form::textarea('hasil_konsultasi',@$bimbingankp->hasil_konsultasi,['class'=>'form-control','id'=>'nahasil_konsultasima','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control','required']) !!}
		</div>
	