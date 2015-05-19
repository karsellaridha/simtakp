@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuanpembkp-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuanpembkp,['method'=>'PATCH','action'=>  ['PengajuanpembkpController@updatePpkp',$pengajuanpembkp->id], ['id'=>'form'] ]) !!}
		
		@include('pengajuanpembkp.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop
