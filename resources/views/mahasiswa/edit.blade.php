@extends("template")
@section("content")


<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit: {!! $mahasiswa-> nama !!}</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::model($mahasiswa,['method'=>'PATCH','action'=>  ['MahasiswaController@updateMahasiswa',$mahasiswa->id]]) !!}
		
		@include('mahasiswa.form',['submitButtonText'=>'Ubah Mahasiswa'])
	
	{!! Form::close() !!}

</div><!-- /.box-body -->
</div><!-- /.box -->

@stop