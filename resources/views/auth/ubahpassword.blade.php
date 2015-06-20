@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Ubah Password</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	
	{!! Form::open(['url'=>'ubahpassword/'.Auth::user()->id]) !!}
		
		<div class="form-group">
			{!! Form::label('pl','Password Lama:') !!}
			{!! Form::input('password','passwordlama',null,['class'=>'form-control','id'=>'passwordlama','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('pb','Password Baru:') !!}
			{!! Form::input('password','passwordbaru',null,['class'=>'form-control','id'=>'passwordbaru','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cpb','Confirm Password Baru:') !!}
			{!! Form::input('password','confirmpasswordbaru',null,['class'=>'form-control','id'=>'confirmpasswordbaru','required']) !!}
		</div>
	
		<div class="form-group">
			{!! Form::submit("Ubah Password",['class'=>'btn btn-primary form-control','required']) !!}
		</div>
	{!! Form::close() !!}

</div><!-- /.box-body -->
</div><!-- /.box -->

@stop