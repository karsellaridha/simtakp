@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Data Konsultasi TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	
	{!! Form::open(['url'=>'bimbingantap']) !!}

		@include('bimbinganta.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop