<?php

use App\NilaiTa1;
use App\NilaiTa2;
?>

@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h2 class="box-title"><b>Pengajuan Ujian TA</b></h2>
                </div><!-- /.box-header -->
  
   <div class="box-body">

@if(count($pengajuanUjian)==0)
	<a href='{!! url("ujian_ta/input/ta2") !!}' class='btn btn-primary pull-right'>Ajukan <br> Ujian Komprehensif</a>
@elseif(count($pengajuanUjian)==1)
	<a href='{!! url("ujian_ta/input/ta1") !!}' class='btn btn-primary pull-right'>Ajukan <br> Ujian Proposal TA</a>
@endif
<div class='clearfix'></div>

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
<?php $penguji = $penguji->where('nim','=',$pengajuanUjian->nim)->first() ?>
<tr>
	<td>Penguji 1</td>
	<td>:</td>
	<td>{!! @$penguji->data_penguji_1->nama !!}</td>
</tr>
<tr>
	<td>Penguji 2</td>
	<td>:</td>
	<td>{!! @$penguji->data_penguji_2->nama !!}</td>
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

@else
Belum Ada Data
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
	<td>Tempat</td>
	<td>:</td>
	<td>{!! @$pengajuanUjian2->tempat_sidang !!}</td>
</tr>
<?php $penguji = $penguji->where('nim','=',$pengajuanUjian->nim)->first() ?>
<tr>
	<td>Penguji 1</td>
	<td>:</td>
	<td>{!! @$penguji->data_penguji_1->nama !!}</td>
</tr>
<tr>
	<td>Penguji 2</td>
	<td>:</td>
	<td>{!! @$penguji->data_penguji_2->nama !!}</td>
</tr>
<tr>
	<td>Status</td>
	<td>:</td>
	<td><span class="label {!! ($pengajuanUjian2->status=="diajukan")? "label-danger" : "label-success" !!}">{!! @$pengajuanUjian2->status !!}</span></td>
</tr>
<?php


$nilaita2 = new NilaiTa2;
$ta2 = $nilaita2->nilaiTotal($pengajuanUjian2->nim) ;

?>
<tr>
	<td>Nilai Angka</td>
	<td>:</td>
	<td><b>{!! $ta2['angka'] !!}</b></td>
</tr>
<tr>
	<td>Nilai Huruf</td>
	<td>:</td>
	<td><font color="red"><b>{!! $ta2['huruf'] !!}</b></font></td>
</tr>
@else
Belum Ada Data
@endif
<hr>
</table>
   </div>

</div>


@stop