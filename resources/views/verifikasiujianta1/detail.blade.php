@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Verifikasi Ujian TA1</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
<center><table border="0" class="table">
	<tr>
		<td><h4>NIM</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $psta->mahasiswa->nim !!}</h4><td>
	</tr>
		<td><h4>Nama</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $psta->mahasiswa->nama !!}</h4><td>	
	<tr>
		<td><h4>Dosen Pembimbing 1</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $psta->ppta->data_pembimbing_1->nama !!}</h4><td>
	</tr>
	<tr>
		<td><h4>Dosen Pembimbing 2</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! @$psta->ppta->data_pembimbing_2->nama !!}</h4><td>
	</tr>
	<tr>
		<td><h4>Judul Tugas Akhir</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $psta->ppta->judul !!}</h4><td>
	</tr>
	<tr>
		<td><h4>Nomor HP</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $psta->no_hp !!}</h4><td>
	</tr>
</table></center>

@if(count($verifikasi)==0)

{!! Form::open(['url'=>"verifikasi_ujian/ta1/input/$pengajuanUjian->nim"]) !!}

<table border="0" class="table">
	<tr>
		<td>Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi
(KRS) dan Kartu Tanda Mahasiswa (KTM)</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->ksm !!}</td>
		<td>{!! Form::checkbox('ksm') !!}<td>
	</tr>
	<tr>
		<td>Fotocopy bukti pembayaran SPP dan DPL berjalan</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->spp !!}</td>
		<td>{!! Form::checkbox('spp') !!}<td>
	</tr>
	<tr>
		<td>Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai dengan
semester terakhir / Daftar Kumpulan Nilai (DKN)</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->dkn !!}</td>
		<td>{!! Form::checkbox('dkn') !!}<td>
	</tr>
		<tr>
		<td>Fotokopi KTM yang berlaku</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->ktm !!}</td>
		<td>{!! Form::checkbox('ktm') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>Fotocopy form konsultasi TA1 yang telah ditanda tangani oleh ketua jurusan</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->form_konsultasi !!}</td>
		<td>{!! Form::checkbox('form_konsultasi') !!}<td>
	</tr>
		<tr>
		<td>Mendapat rekomendasi dari pembimbing untuk mengikuti ujian proposal tugas akhir</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->rekomendasi_sidang !!}</td>
		<td>{!! Form::checkbox('rekomendasi_sidang') !!}<td>
	</tr>
		<tr>
		<td>4 eksemplar tugas akhir yang telah disetujui oleh pembimbing dijilid biasa dengan bagian depan plastik transparan dan bagian belakang menggunaan kertas kambing warna biru</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->tugas_akhir_1 !!}</td>
		<td>{!! Form::checkbox('tugas_akhir_1') !!}<td>
	</tr>
		<tr>
		<td>Fotocopy Surat Keputusan pembimbing Tugas Akhir</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->sk_pembimbing_ta !!}</td>
		<td>{!! Form::checkbox('sk_pembimbing_ta') !!}<td>
	</tr>
</table>
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="form-group">
			<div class="col-md-2 pull-right">
				<a href="{!! url('verifikasi_ujian/ta1')!!}" class="btn btn-primary form-control">Kembali</a>
			</div>
@if(count($verifikasi)==0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Verifikasi",['class'=>'btn btn-primary form-control','required']) !!}
			</div>
@endif
</div>

{!! Form::close() !!}

@stop