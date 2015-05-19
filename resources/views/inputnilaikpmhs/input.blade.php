@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Input Nilai KP

                
                <div class="box-body">

	{!! Form::open(['url'=>'inputnilaikpmhs/input','files'=>'true']) !!}

		@include('inputnilaikpmhs.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop