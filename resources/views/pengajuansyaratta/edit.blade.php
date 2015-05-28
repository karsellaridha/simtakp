@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuansyaratkp-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuansyaratkp,['method'=>'PATCH','action'=>  ['PengajuansyaratkpController@updatePskp',$pengajuansyaratkp->id]]) !!}
		
		@include('pengajuansyaratkp.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop