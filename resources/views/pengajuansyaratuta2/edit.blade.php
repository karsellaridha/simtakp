@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuansyaratuta2-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuansyaratuta2,['method'=>'PATCH','action'=>  ['Pengajuansyaratuta2Controller@updatePsuta2',$pengajuansyaratuta2->id]]) !!}
		
		@include('pengajuansyaratuta2.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop