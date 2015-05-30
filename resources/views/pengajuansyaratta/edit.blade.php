@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuansyaratta-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuansyaratta,['method'=>'PATCH','action'=>  ['PengajuansyarattaController@updatePsta',$pengajuansyaratta->id]]) !!}
		
		@include('pengajuansyaratta.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop