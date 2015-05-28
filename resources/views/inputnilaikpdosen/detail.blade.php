@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Input Nilai KP</h3>
                </div><!-- /.box-header -->

<center><table border="0" class="table">
  <tr>
    <td>NIM</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->nim !!}<td>
  </tr>

  <tr>
    <td>Nama</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->nama !!}<td> 
  </tr>

  <tr>
    <td>Program Studi</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->prodi->nama !!}<td> 
  </tr>

  <tr>
    <td>Dosen Pembimbing</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->pengajuanpembkp->dosen->nama !!}<td>
  </tr>

  <tr>
    <td>Tempat KP</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->pengajuanpembkp->tempat_kp !!}<td>
  </tr>

<tr>
    <td>Judul Laporan KP</td>
    <td>:</td> 
    <td>{!! $inputnilaikp->judul_kp !!}<td>
  </tr>

  <tr>
    <td>Pembimbing Lapangan</td>
    <td>:</td>
    <td>{!! $inputnilaikp->pemb_lapangan !!}</td>
  </tr>

  <tr>
    <td>Jumlah Nilai Pembimbing Lapangan</td>
    <td>:</td>
    <td>{!! $inputnilaikp->nilai_pemblapangan !!}</td>
  </tr>

  <tr>
    <td>Form Penilaian Pembimbing</td>
    <td>:</td>
    <td><a href= "{!! url($inputnilaikp->file_nilai) !!}">Lihat File</a></td>
  </tr>
  
</table>

<div class="box-body">

@if (count($inputnilaikp)>0)
<table border="0" class="table">
  <tr>
    <td>Kesesuaian Laporan dengan Format</td>
    <td>:</td>
    <td>{!! $inputnilaikp->kesesuaian_laporan !!}</td>
  </tr>

  <tr>
    <td>Penguasaan Materi KP</td>
    <td>:</td>
    <td>{!! $inputnilaikp->penguasaan_materi !!}</td>
  </tr>

  <tr>
    <td>Analisis dan Perancangan</td>
    <td>:</td>
    <td>{!! $inputnilaikp->analisis_perancangan !!}</td>
  </tr>

  <tr>
    <td>Sikap dan Etika</td>
    <td>:</td>
    <td>{!! $inputnilaikp->sikap_etika !!}</td>
  </tr>
  
</table>
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->


@stop

