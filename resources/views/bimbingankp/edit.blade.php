@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $bimbingankp-> tanggal !!}</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::model($bimbingankp,['method'=>'PATCH','action'=>  ['BimbingankpController@updateBimbingankp',$bimbingankp->id]]) !!}
		
		@include('bimbingankp.form',['submitButtonText'=>'Ubah Data Konsultasi KP'])
	
	{!! Form::close() !!}

</div><!-- /.box-body -->
</div><!-- /.box -->

@stop