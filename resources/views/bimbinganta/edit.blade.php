@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $bimbinganta-> tanggal !!}</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::model($bimbinganta,['method'=>'PATCH','action'=>  ['BimbingantaController@updateBimbinganta',$bimbinganta->id]]) !!}
		
		@include('bimbinganta.form',['submitButtonText'=>'Ubah Data Konsultasi TA'])
	
	{!! Form::close() !!}

</div><!-- /.box-body -->
</div><!-- /.box -->

@stop