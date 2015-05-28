@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $pengajuanpembta-> nama !!} </h3>
                </div><!-- /.box-header -->


	{!! Form::model($pengajuanpembta,['method'=>'PATCH','action'=>  ['PengajuanpembkpController@updatePpkp',$pengajuanpembta->id], ['id'=>'form'] ]) !!}
		
		@include('pengajuanpembta.form',['submitButtonText'=>'Ubah Pengajuan'])
	
	{!! Form::close() !!}
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop
