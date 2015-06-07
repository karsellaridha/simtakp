@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat Ujian Komprehensif TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($psuta2)>0)
<table border="0" class="table">
	<tr>
		<td>Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana
Studi (KRS) dan Kartu Tanda Mahasiswa (KTM)</td>
		<td>:</td>
		<td>{!! $psuta2->ksmktm !!}</td>
	</tr>
	<tr>
		<td>Membayar biaya ujian dan biaya bimbingan sebesar Rp.
450.000 / Rp. 255.000 bagi yang tidak lulus ujian komprehensif
yang pertama, ujian yang kedua atau ketiga ke Bank BNI
dengan no.rek 70570115 a.n Rektor Unsri</td>
		<td>:</td>
		<td>{!! $psuta2->biaya_ujian !!}</td>
	</tr>
	<tr>
		<td>Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai
dengan semester terakhir / Daftar Kumpulan Nilai (DKN)</td>
		<td>:</td>
		<td>{!! $psuta2->dkn !!}</td>
	</tr>
	<tr>
		<td>Melampirkan fotocopy sertifikat kursus Bahasa Inggris dari Unit
bahasa Inggris PIK</td>
		<td>:</td>
		<td>{!! $psuta2->sertifikat !!}</td>
	</tr>
	<tr>
		<td>Fotocopy/legalisir sertificate nilai SULIET minimal 400</td>
		<td>:</td>
		<td>{!! $psuta2->suliet !!}</td>
	</tr>
	<tr>
		<td>Printscren halaman nilai SULIET yang di Akademik (Simak)</td>
		<td>:</td>
		<td>{!! $psuta2->printscreen_suliet !!}</td>
	</tr>
	<tr>
		<td>Mendapat rekomendasi dari kedua pembimbing untuk ujian
komprehensif</td>
		<td>:</td>
		<td>{!! $psuta2->rekomendasi !!}</td>
	</tr>
	<tr>
		<td>Melampirkan Form Perbaikan Ujian Tugas Akhir Akhir I</td>
		<td>:</td>
		<td>{!! $psuta2->form_ta1 !!}</td>
	</tr>
	<tr>
		<td>4 eksemplar tugas akhir yang telah disetujui oleh pembimbing
dijilid biasa dengan bagian depan plastik transparan dan bagian
belakang menggunaan kertas kambing warna biru</td>
		<td>:</td>
		<td>{!! $psuta2->eksemplar !!}</td>
	</tr>
	<tr>
		<td>Surat keterangan bebas pustaka dari perpustakaan Program
Diploma Komputer & perpustakaan Universitas Sriwijaya yang
masih berlaku</td>
		<td>:</td>
		<td>{!! $psuta2->bebas_pustaka !!}</td>
	</tr>
	<tr>
		<td>Surat Keterangan dari bagian keuangan bahwa sudah bebas dari
pembayaran apapun, yang masih berlaku</td>
		<td>:</td>
		<td>{!! $psuta2->bebas_bayaran !!}</td>
	</tr>
	<tr>
		<td>Fotocopy Surat Keputusan Tugas Akhir II yang masih berlaku</td>
		<td>:</td>
		<td>{!! $psuta2->sk_ta !!}</td>
	</tr>
	<tr>
		<td>Semua berkas dimasukkan ke dalam map berwarna kuning</td>
		<td>:</td>
		<td>{!! $psuta2->map_kuning !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($psta->status_syaratuta2=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $psuta2->status_syaratuta2 !!}</span></td>
	</tr>
	
</table>
@endif

@if (count($psuta2)==0)
<a href="{!! url('pengajuansyaratuta2/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else

@if (@$psuta2->status_syaratta2="diverifikasi")
<a href="{!! url('pengajuansyaratuta2/input')!!}" class="btn btn-primary">{!! (count($pputa2)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

