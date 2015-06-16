@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Susun Jadwal Ujian TA</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
<table class='table' id='datatable'>
<thead>
<tr>
<td>Nim</td>
<td>Nama</td>
<td>Judul TA</td>
<td>Pembimbing</td>
<td>Jadwal</td>
<td>Penguji</td>
<td>Aksi</td>
</tr>
</thead>

<tbody>
@foreach ($data as $p)
<?php $ta = $psta->where('nim','=',$p->nim)->first(); ?>
<tr>
<td>{!! $p->nim !!}</td>
<td>{!! $ta->mahasiswa->nama !!}</td>
<td>{!! $ta->judul !!}</td>
<td>{!! "- ".$ta->ppta->data_pembimbing_1->nama."<br>- ".@$ta->ppta->data_pembimbing_2->nama !!}</td>
<td>{!! @$p->tempat_sidang."<br>".@$p->jadwal !!}</td>
<?php $penguji = $uji->where('nim','=',$p->nim)->first(); ?>
<td>{!! "- ".@$penguji->data_penguji_1->nama."<br>- ".@$penguji->data_penguji_2->nama !!}</td>

<td><a href='{!! url("susunjadwalta/jadwal/$p->nim")!!}' data-toggle="modal" data-target="#myModal" >Susun Jadwal</a> - <a href='{!! url("susunjadwalta/penguji/$p->nim")!!}' data-toggle="modal" data-target="#myModal">Penguji</a> </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@stop