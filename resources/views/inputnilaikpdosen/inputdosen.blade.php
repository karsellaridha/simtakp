@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Input Nilai KP Mahasiswa</h3>

                
                <div class="box-body">

	{!! Form::open(['url'=>'inputnilaikpdosen/inputdosen','files'=>'true']) !!}

		@include('inputnilaikpdosen.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop