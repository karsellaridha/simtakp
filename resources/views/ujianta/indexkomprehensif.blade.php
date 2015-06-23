@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Dafar Jadwal Ujian Komprehensif Mahasiswa</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
<table class='table' id='datatable'>
<thead>
<tr>
<td>Nim</td>
<td>Nama</td>
<td>Judul TA</td>
<td>Jadwal</td>
<td>Tempat</td>
<td>Input Nilai</td>
<td>Aksi</td>
</tr>
</thead>

<tbody>
@foreach ($pengajuanUjian as $data)
<?php 
	$psta = $psta->where('nim','=',$data->nim)->first();
	$penguji = $penguji->where('nim','=',$data->nim)->first(); 
?>

<tr>
<td>{!! $data->nim !!}</td>
<td>{!! $data->mahasiswa->nama !!}</td>
<td>{!! $psta->judul !!}</td>
<td>{!! @$data->jadwal !!}</td>
<td>{!! @$data->tempat_sidang !!}</td>
<td>@if($psta->ppta->pembimbing_2==null)
	<a href="{{ url('penilaianadmin/pembimbing/ta2/'.$data->nim.'/'.$psta->ppta->pembimbing_1) }}">Pembimbing 1</a>
	@else
	<a href="{{ url('penilaianadmin/pembimbing/ta2/'.$data->nim.'/'.$psta->ppta->pembimbing_1) }}">Pembimbing 1</a>
	 | <a href="{{ url('penilaianadmin/pembimbing/ta2/'.$data->nim.'/'.$psta->ppta->pembimbing_2) }}">Pembimbing 2 </a>
	@endif
	| <a href="{{ url('penilaianadmin/penguji/ta2/'.$data->nim.'/'.$penguji->penguji_1) }}">Penguji 1</a> | <a href="{{ url('penilaianadmin/penguji/ta2/'.$data->nim.'/'.$penguji->penguji_2) }}">Penguji 2 </a></td>
<td>cetak form perbaikan | cetak berita acara | cetak form penilaian | cetak absensi</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@stop