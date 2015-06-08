@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Ujian TA</h3>
                </div><!-- /.box-header -->
  
   <div class="box-body">

<h4>Ujian TA 1</h4>
@if(count($pengajuanUjian)>0)
Jadwal 	: {!! @$pengajuanUjian->jadwal !!}<br>
Status 	: {!! @$pengajuanUjian->status !!}<br>
Nilai	: {!! @$pengajuanUjian->status !!}<br>
<a href="">Detail</a> - <a href="">Edit</a>
@else
Belum ada data
@endif
<hr>

<h4>Ujian TA 2</h4>
@if(count($pengajuanUjian2)>0)
Jadwal : {!! @$pengajuanUjian2->jadwal !!}<br>
Status : {!! @$pengajuanUjian2->status !!}<br>
Nilai	: {!! @$pengajuanUjian->status !!}<br>
<a href="">Detail</a> - <a href="">Edit</a>
@else
Belum ada data
@endif
<hr>

   </div>

</div>


@stop