@extends("template")
@section("content")

                <div class="box-header">
                  <h3 class="box-title">Input Nilai KP Mahasiswa</h3>
                </div><!-- /.box-header -->


	<div class="box">
                
                <div class="box-body">

<center><table border="0" class="table">
  <tr>
    <td>NIM</td>
    <td>:</td> 
    <td>{!! $nilaikp->mahasiswa->nim !!}<td>
  </tr>

  <tr>
    <td>Nama</td>
    <td>:</td> 
    <td>{!! $nilaikp->mahasiswa->nama !!}<td> 
  </tr>

<tr>
    <td>Judul Laporan KP</td>
    <td>:</td> 
    <td>{!! $nilaikp->judul_kp !!}<td>
  </tr>

  <tr>
    <td>Pembimbing Lapangan</td>
    <td>:</td>
    <td>{!! $nilaikp->pemb_lapangan !!}</td>
  </tr>

  <tr>
    <td>Jumlah Nilai Pembimbing Lapangan</td>
    <td>:</td>
    <td>{!! $nilaikp->nilai_pemblapangan !!}</td>
  </tr>

  <tr>
    <td>Form Penilaian Pembimbing</td>
    <td>:</td>
    <td><a href= "{!! url($nilaikp->file_nilai) !!}">Lihat File</a></td>
  </tr>
  
</table></center>

	{!! Form::open(['url'=>'inputnilaikpdosen/'.$nilaikp->mahasiswa->nim]) !!}

		@include('inputnilaikpdosen.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}	

</div><!-- /.box-body -->
</div><!-- /.box -->
@stop