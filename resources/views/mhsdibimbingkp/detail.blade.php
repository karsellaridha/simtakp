@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Detail Nilai KP Keseluruhan Mahasiswa</h3>
                </div><!-- /.box-header -->
<div class="box-body">

<table border="0" class="table">

  <tr>
    <td>Nama Mahasiswa</td>
    <td>:</td> 
    <td>{!! $pengajuanpembkp->mahasiswa->nama !!}<td> 
  </tr>

  <tr>
    <td>NIM</td>
    <td>:</td> 
    <td>{!! $pengajuanpembkp->mahasiswa->nim !!}<td>
  </tr>

  <tr>
    <td>Program Studi</td>
    <td>:</td> 
    <td>{!! $pengajuanpembkp->mahasiswa->prodi->nama !!}<td> 
  </tr>
  
  <tr>
    <td>Tempat KP</td>
    <td>:</td> 
    <td>{!! $pengajuanpembkp->mahasiswa->pengajuanpembkp->tempat_kp !!}<td>
  </tr>

  <tr>
    <td>Judul Laporan KP</td>
    <td>:</td> 
    <td>{!! @$nilaikp->judul_kp !!}<td>
  </tr>

  <tr>
    <td>Dosen Pembimbing</td>
    <td>:</td> 
    <td>{!! $pengajuanpembkp->dosen->nama !!}<td>
  </tr>

  <tr>
    <td>Pembimbing Lapangan</td>
    <td>:</td>
    <td>{!! @$nilaikp->pemb_lapangan !!}</td>
  </tr>
  
</table><br><br>
@if(count($nilaikp)>0)
<p><center><b>FORMULIR PENILAIAN KERJA PRAKTEK (KP) DOSEN PEMBIMBING</b></center></p> 
<table border="2" class="table">

  <tr>
    <td><div align="center">No.</div></td>
    <td><div align="center">Penilaian</div></td>
    <td><div align="center">Bobot (B)</div></td>
    <td><div align="center">Nilai (N)</div></td>
    <td><div align="center">BxN</div></td>
  </tr>

  <tr>
    <td><div align="center">1</div></td>
    <td>Kesesuaian Laporan dengan Format</td>
    <td>30%</td>
    <td>{!! $nilaikp->kesesuaian_laporan !!}</td>
    <td>{!! 0.3*$nilaikp->kesesuaian_laporan !!}</td>
  </tr>

  <tr>
    <td><div align="center">2</div></td>
    <td>Penguasaan Materi KP</td>
    <td>30%</td>
    <td>{!! $nilaikp->penguasaan_materi !!}</td>
    <td>{!! 0.3*$nilaikp->penguasaan_materi !!}</td>
  </tr>

  <tr>
    <td><div align="center">3</div></td>
    <td>Analisis dan Perancangan</td>
    <td>30%</td>
    <td>{!! $nilaikp->analisis_perancangan !!}</td>
    <td>{!! 0.3*$nilaikp->analisis_perancangan !!}</td>
  </tr>

  <tr>
    <td><div align="center">4</div></td>
    <td>Sikap dan Etika</td>
    <td>10%</td>
    <td>{!! $nilaikp->sikap_etika !!}</td>
    <td>{!! 0.3*$nilaikp->sikap_etika !!}</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">Jumlah</div></td>
    <td><div align="center"><b>{!! $nilaikp->nilai_totaldosbing() !!}</b></div></td>
  </tr>
</table>
<br>

<p><center><b>REKAP NILAI KERJA PRAKTEK (KP)</b></center></p> 
<table border="2" class="table">

  <tr>
    <td><div align="center">No.</div></td>
    <td><div align="center">Penilaian</div></td>
    <td><div align="center">Status (B)</div></td>
    <td><div align="center">Nilai (N)</div></td>
    <td><div align="center">Keterangan</div></td>
  </tr>

  <tr>
    <td><div align="center">1</div></td>
    <td>{!! $pengajuanpembkp->dosen->nama !!}</td>
    <td>Dosen Pembimbing KP</td>
    <td>60%</td>
    <td>{!! $nilaikp->nilai_totaldosbing() !!}</td>
  </tr>

  <tr>
    <td><div align="center">2</div></td>
    <td>{!! $nilaikp->pemb_lapangan !!}</td>
    <td>Pembimbing Lapangan</td>
    <td>40%</td>
    <td>{!! $nilaikp->nilai_totalpemblapangan() !!}</td>
  </tr>

  <tr>
    <td colspan="3"><div align="center">Rata-Rata Nilai</div></td>
    <td>100%</td>
    <td><b>{!! $nilaikp->total_nilaikp() !!}</b></td>
  </tr>

</table>
@else
- Nilai Belum di input -
@endif


</div><!-- /.box-body -->
</div><!-- /.box -->

 @if(Auth::user()->role=="mahasiswa")
<div class="form-group">
  @if(count($nilaikp->where("nim",'=',$nilaikp->nim)->get())>0)
      <div class="col-md-2 pull-right">
        <a href="{!! url("mhsdibimbingkp/cetak_penilaian_dosen/$nilaikp->nim")!!}" class="btn btn-primary form-control">Cetak Penilaian Dosen</a>
      </div>


      <div class="col-md-2 pull-right">
        <a href="{!! url("mhsdibimbingkp/cetak_rekap_penilaian/$nilaikp->nim")!!}" class="btn btn-primary form-control">Cetak Rekap Penilaian</a>
      </div>
  @endif
</div>
@endif

@stop

