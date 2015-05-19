@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <b><h2 class="box-title">Susun Pembimbing KP {!! date('Y') !!}</h2></b>
                </div><!-- /.box-header -->

                
                <div class="box-body">

{!! Form::open(['url'=>'susunpembkp/input']) !!}
	
<div class='clearfix'></div><br>

@foreach($dosen as $dos)
Dosen : {!!$dos->nip!!}<br>
Nama : {!!$dos->nama!!}<br>
Kuota : {!!$dos->kuotabimbingan()->kuota_kp!!}<br>
<table class='table table-bordered'>
	<thead style='background:#c0c0c0'>
		<tr>
<td>NIM</td>
<td>Nama</td>
<td>Tempat KP</td>
<td>Tukar</td>
		</tr>
	</thead>
	<tbody>

<?php $p = $ppkp->with('mahasiswa')->where('nip','=',$dos->nip)->where('status_pembimbing','=','diajukan')->where('tahun','=',date('Y'))->get() ?>

@foreach($p as $pp)
<tr>
<td>{!! $pp->nim !!}</td>
<td>{!! $pp->mahasiswa->nama !!}</td>
<td>{!! $pp->tempat_kp !!}</td>
<td>{!! Form::checkbox('tukar[]',$pp->id,null,['class'=>'tukar']) !!}</td>
</tr>
@endforeach


	</tbody>
</table>
@endforeach



</div><!-- /.box-body -->
</div><!-- /.box -->
		<div class="form-group">

			@if (count($ppkp)>0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Tukar",['class'=>'btn btn-primary form-control']) !!}
			</div>
			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembkp/simpan')!!}" class="btn btn-danger form-control">Simpan</a>
			</div>
			@endif

			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembkp/lihatdata')!!}" class="btn btn-success form-control">lihat data</a>
			</div>
		</div>

{!! Form::close() !!}

@stop

@section('js')
<script type="text/javascript">




</script>
@stop