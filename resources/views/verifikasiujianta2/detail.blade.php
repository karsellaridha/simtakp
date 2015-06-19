@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Verifikasi Ujian Komprehensif TA</h3>
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

{!! Form::open(['url'=>"verifikasi_ujian/ta2/input/$pengajuanUjian->nim"]) !!}

<table border="0" class="table">
	<tr>
		<td>Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana
Studi (KRS) dan Kartu Tanda Mahasiswa (KTM)</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->ksmktm !!}</td>
		<td>{!! Form::checkbox('ksmktm') !!}<td>
	</tr>
	<tr>
		<td>Membayar biaya ujian dan biaya bimbingan sebesar Rp.
450.000 / Rp. 255.000 bagi yang tidak lulus ujian komprehensif
yang pertama, ujian yang kedua atau ketiga ke Bank BNI
dengan no.rek 70570115 a.n Rektor Unsri</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->biaya_ujian !!}</td>
		<td>{!! Form::checkbox('biaya_ujian') !!}<td>
	</tr>
	<tr>
		<td>Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai
dengan semester terakhir / Daftar Kumpulan Nilai (DKN)</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->dkn !!}</td>
		<td>{!! Form::checkbox('dkn') !!}<td>
	</tr>
		<tr>
		<td>Melampirkan fotocopy sertifikat kursus Bahasa Inggris dari Unit
bahasa Inggris PIK</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->sertifikat !!}</td>
		<td>{!! Form::checkbox('sertifikat') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>Fotocopy/legalisir sertificate nilai SULIET minimal 400</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->suliet !!}</td>
		<td>{!! Form::checkbox('suliet') !!}<td>
	</tr>
		<tr>
		<td>Printscren halaman nilai SULIET yang di Akademik (Simak)</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->printscreen_suliet !!}</td>
		<td>{!! Form::checkbox('printscreen_suliet') !!}<td>
	</tr>
		<tr>
		<td>Mendapat rekomendasi dari kedua pembimbing untuk ujian
komprehensif</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->rekomendasi !!}</td>
		<td>{!! Form::checkbox('rekomendasi') !!}<td>
	</tr>
		<tr>
		<td>Melampirkan Form Perbaikan Ujian Tugas Akhir Akhir I</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->form_ta1 !!}</td>
		<td>{!! Form::checkbox('form_ta1') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>4 eksemplar tugas akhir yang telah disetujui oleh pembimbing
dijilid biasa dengan bagian depan plastik transparan dan bagian
belakang menggunaan kertas kambing warna biru</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->eksemplar !!}</td>
		<td>{!! Form::checkbox('eksemplar') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>Surat keterangan bebas pustaka dari perpustakaan Program
Diploma Komputer & perpustakaan Universitas Sriwijaya yang
masih berlaku</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->bebas_pustaka !!}</td>
		<td>{!! Form::checkbox('bebas_pustaka') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>Surat Keterangan dari bagian keuangan bahwa sudah bebas dari
pembayaran apapun, yang masih berlaku</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->bebas_bayaran !!}</td>
		<td>{!! Form::checkbox('bebas_bayaran') !!}<td>
	</tr>
	</tr>
		<tr>
		<td>Fotocopy Surat Keputusan Tugas Akhir II yang masih berlaku</td>
		<td>:</td>
		<td>{!! $pengajuanUjian->sk_ta !!}</td>
		<td>{!! Form::checkbox('sk_ta') !!}<td>
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