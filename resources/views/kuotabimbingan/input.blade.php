@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Input Data Kuota Bimbingan per Dosen</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::open(['url'=>'kuotabimbingan/input']) !!}

		@include('kuotabimbingan.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop