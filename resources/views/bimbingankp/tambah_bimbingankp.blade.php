@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Data Konsultasi KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	
	{!! Form::open(['url'=>'bimbingankp']) !!}

		@include('bimbingankp.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop