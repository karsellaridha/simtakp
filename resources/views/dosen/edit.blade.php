@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $dosen-> nama !!}</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::model($dosen,['method'=>'PATCH','action'=>  ['DosenController@updateDosen',$dosen->id]]) !!}
		
		@include('dosen.form',['submitButtonText'=>'Ubah Dosen'])
	
	{!! Form::close() !!}

</div><!-- /.box-body -->
</div><!-- /.box -->

@stop