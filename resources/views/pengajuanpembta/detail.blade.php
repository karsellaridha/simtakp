@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Pembimbing TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($ppta)>0)
<table border="0" class="table">
	<tr>
		<td>Dosen Pembimbing 1</td>
		<td>:</td>
		<td>{!! @$ppta->data_pembimbing_1->nama !!}</td>
	</tr>
	<tr>
		<td>Dosen Pembimbing 2</td>
		<td>:</td>
		<td>{!! @$ppta->data_pembimbing_2->nama !!}</td>
	</tr>
	<tr>
		<td>Judul Tugas Akhir</td>
		<td>:</td>
		<td>{!! $ppta->judul !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($ppta->status_pembimbing=="diajukan")? "label-danger" : "label-success" !!}">{!! $ppta->status_pembimbing !!}</span></td>
	</tr>
	<tr>
		<td>Tahun</td>
		<td>:</td>
		<td>{!! $ppta->tahun !!}</td>
	</tr>
</table>
@endif

@if (count($ppta)==0)
<a href="{!! url('pengajuanpembta/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else
<a href="{!! url('pengajuanpembta/input')!!}"
@if (@$ppta->status_pembimbing=="diajukan")
<a href="{!! url('pengajuanpembta/input')!!}" class="btn btn-primary">{!! (count($ppta)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

