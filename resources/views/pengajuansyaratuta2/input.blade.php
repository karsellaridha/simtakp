@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Data Pengajuan Syarat Ujian Komprehensif TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::open(['url'=>'pengajuansyaratuta2/input']) !!}

		@include('pengajuansyaratuta2.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop