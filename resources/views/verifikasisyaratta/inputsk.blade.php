@extends("template")
@section("content")
	
	{!! Form::model($verifikasi,['method'=>'PATCH','action'=>  ['VerifikasisyarattaController@simpanNoSk',$verifikasi->id]]) !!}

	<div class="form-group">
			{!! Form::label('no_sk','Nomor SK :') !!}
			{!! Form::text('no_sk',@$verifikasi_syaratta->no_sk,['class'=>'form-control','id'=>'no_sk'])!!}
	</div>

	<div class="form-group">
			{!! Form::submit('Input No. SK',['class'=>'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}	
@stop