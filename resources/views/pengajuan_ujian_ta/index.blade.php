<?php

use App\NilaiTa1;
?>

@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h2 class="box-title"><b>Pengajuan Ujian TA</b></h2>
                </div><!-- /.box-header -->
  
   <div class="box-body">

<h4>Ujian Proposal TA</h4>
<table class="table">
@if(count($pengajuanUjian)>0)
<tr>
	<td>Jadwal</td>
	<td>:</td>
	<td>{!! @$pengajuanUjian->jadwal !!}</td>
</tr>
<tr>
	<td>Tempat</td>
	<td>:</td>
	<td>{!! @$pengajuanUjian->tempat_sidang !!}</td>
</tr>
<tr>
	<td>Status</td>
	<td>:</td>
	<td><span class="label {!! ($pengajuanUjian->status=="diajukan")? "label-danger" : "label-success" !!}">{!! @$pengajuanUjian->status !!}</span></td>
</tr>

<?php


$nilaita1 = new NilaiTa1;
$ta1 = $nilaita1->nilaiTotal($pengajuanUjian->nim) ;

?>
<tr>
	<td>Nilai Angka</td>
	<td>:</td>
	<td><b>{!! $ta1['angka'] !!}</b></td>
</tr>
<tr>
	<td>Nilai Huruf</td>
	<td>:</td>
	<td><font color="red"><b>{!! $ta1['huruf'] !!}</b></font></td>
</tr>
<tr>
	<td><a href="">Detail</a> - <a href="">Edit</a></td>
</tr>

@else
Belum ada data
@endif
<hr>
</table>

<h4>Ujian Komprehensif TA</h4>
<table class="table">
@if(count($pengajuanUjian2)>0)
<tr>
	<td>Jadwal</td>
	<td>:</td>
	<td>{!! @$pengajuanUjian2->jadwal !!}</td>
</tr>
<tr>
	<td>Status</td>
	<td>:</td>
	<td>{!! @$pengajuanUjian2->status !!}</td>
</tr>
<tr>
	<td>Nilai</td>
	<td>:</td>
	<td><span class="label {!! ($pengajuanUjian->status=="diajukan")? "label-danger" : "label-success" !!}">{!! @$pengajuanUjian->status !!}</span></td>
</tr>
<tr>
	<td><a href="">Detail</a> - <a href="">Edit</a></td>
</tr>
@else
Belum ada data
@endif
<hr>

   </div>

</div>


@stop