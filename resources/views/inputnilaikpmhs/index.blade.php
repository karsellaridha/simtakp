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
    <td>Nama</td>
    <td>:</td> 
    <td>{!! Auth::user()->mahasiswa->nama !!}<td> 
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
</table></center>

<div class="box-body">

@if (count($inputnilaikp)>0)
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
  <tr>
    <td>Judul Laporan KP</td>
    <td>:</td>
    <td>{!! $inputnilaikp->judul_kp !!}</td>
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
  <tr>
    <td><b><h3>NILAI KP ANDA</h3></b></td>
    <td><b><h3>:</h3></b></td>
    <td><b><h3>{!! (count($inputnilaikp)>0 ? $inputnilaikp->total_nilaikp() : "Belum di input") !!}</h3></b></td>
  </tr>

</table>
@endif

@if (count($inputnilaikp)==0)
<a href="{!! url('inputnilaikpmhs/input')!!}" class="btn btn-primary">{!!"Input"!!}</a>
@endif


</div><!-- /.box-body -->
</div><!-- /.box -->

 @if(Auth::user()->role=="mahasiswa")
<div class="form-group">
      <div class="col-md-2 pull-right">
        <a href="{!! url('mhsdibimbingkp/detail/'.Auth::user()->mahasiswa->nim)!!}" class="btn btn-primary form-control">Detail</a>
      </div>
</div>
@endif

@stop

