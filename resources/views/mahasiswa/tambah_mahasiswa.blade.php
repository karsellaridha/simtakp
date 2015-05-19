@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Mahasiswa</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	
	{!! Form::open(['url'=>'mahasiswa']) !!}

		@include('mahasiswa.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	
	
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop