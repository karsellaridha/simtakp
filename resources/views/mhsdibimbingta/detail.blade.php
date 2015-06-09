@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Detail Nilai TA Keseluruhan Mahasiswa</h3>
                </div><!-- /.box-header -->
<div class="box-body">
<a href='{!! url("mhsdibimbingta/penilaian/$pengajuanpembta->nim") !!}' class=' btn btn-danger pull-right' data-toggle="modal" data-target="#myModal">Input Nilai TA 2</a> 
<a href='{!! url("mhsdibimbingta/penilaian/$pengajuanpembta->nim") !!}' class=' btn btn-danger pull-right'  style='margin-right:10px'>Input Nilai TA 1</a>

<br><br>
<table border="0" class="table">

  <tr>
    <td>Nama Mahasiswa</td>
    <td>:</td> 
    <td>{!! $pengajuanpembta->mahasiswa->nama !!}<td> 
  </tr>

  <tr>
    <td>NIM</td>
    <td>:</td> 
    <td>{!! $pengajuanpembta->mahasiswa->nim !!}<td>
  </tr>

  <tr>
    <td>Program Studi</td>
    <td>:</td> 
    <td>{!! $pengajuanpembta->mahasiswa->prodi->nama !!}<td> 
  </tr>
  <tr>
    <td>Pembimbing 1</td>
    <td>:</td> 
    <td>{!! $pengajuanpembta->data_pembimbing_1->nama !!}<td> 
  </tr>
  <tr>
    <td>Pembimbing 2</td>
    <td>:</td> 
    <td>{!! @$pengajuanpembta->data_pembimbing_2->nama !!}<td> 
  </tr>
   <tr>
    <td>Judul</td>
    <td>:</td> 

   <?php $j = $psta->where('nim','=',$pengajuanpembta->nim)->first()?>
      <td>{!! (isset($j->judul)) ? 
          $j->judul :
          $pengajuanpembta->judul." <span class='label label-danger'>belum fix</span>";
       !!}</td>
  </tr>
  
</table>


<hr>
<h4>Nilai TA 1</h4>
yang sudah menginput nilai : 
@foreach($nilaita1->sudahInput($pengajuanpembta->nim) as $v)
<span class='label label-success'>{!! $v->nama !!} </span>
@endforeach
<br>
<?php $ta1 = $nilaita1->nilaiTotal($pengajuanpembta->nim) ?>

Akumulasi Nilai <br>
Angka : {!! $ta1['angka'] !!}<br>
Huruf :  {!! $ta1['huruf'] !!}<br>




</div><!-- /.box-body -->
</div><!-- /.box -->

 @if(Auth::user()->role=="mahasiswa")
<div class="form-group">
      <div class="col-md-2 pull-right">
        <a href="{!! url('#')!!}" class="btn btn-primary form-control">Cetak Penilaian Dosen</a>
      </div>

      <div class="col-md-2 pull-right">
        <a href="{!! url('#')!!}" class="btn btn-primary form-control">Cetak Rekap Penilaian</a>
      </div>
</div>
@endif

@stop

