@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuansyaratuta1-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuansyaratuta1,['method'=>'PATCH','action'=>  ['Pengajuansyaratuta1Controller@updatePsuta1',$pengajuansyaratuta1->id]]) !!}
		
		@include('pengajuansyaratuta1.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop