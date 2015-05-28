@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Data Pengajuan Syarat KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::open(['url'=>'pengajuansyaratkp/input']) !!}

		@include('pengajuansyaratkp.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop