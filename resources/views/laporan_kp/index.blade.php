@extends("template")
@section("content")


	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Mahasiswa Telah Ambil KP Periode Per Tahun</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">

	{!! Form::open(['url'=>'laporan_kp/laporan',"method"=>"get"]) !!}

		<div class="form-group">
			{!! Form::label('tahun','Masukkan Tahun :') !!}
			{!! Form::select('tahun',[2012=>2012,2013=>2013,2014=>2014,2015=>2015],['class'=>'form-control','id'=>'tahun'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit('Tampilkan',['class'=>'btn btn-primary']) !!}
		</div>
	
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop
