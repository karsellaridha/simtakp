@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Pembimbing KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($ppkp)>0)
<table border="0" class="table">
	<tr>
		<td>Dosen</td>
		<td>:</td>
		<td>{!! $ppkp->dosen->nama !!}</td>
	</tr>
	<tr>
		<td>Tempat Kp</td>
		<td>:</td>
		<td>{!! $ppkp->tempat_kp !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($ppkp->status_pembimbing=="diajukan")? "label-danger" : "label-success" !!}">{!! $ppkp->status_pembimbing !!}</span></td>
	</tr>
	<tr>
		<td>Tahun</td>
		<td>:</td>
		<td>{!! $ppkp->tahun !!}</td>
	</tr>
</table>
@endif

@if (count($ppkp)==0)
<a href="{!! url('pengajuanpembkp/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else
<a href="{!! url('pengajuanpembkp/input')!!}"
@if (@$ppkp->status_pembimbing=="diajukan")
<a href="{!! url('pengajuanpembkp/input')!!}" class="btn btn-primary">{!! (count($ppkp)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

