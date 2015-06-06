@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat Ujian Proposal TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($psuta1)>0)
<table border="0" class="table">
	<tr>
		<td>Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi
(KRS) dan Kartu Tanda Mahasiswa (KTM)</td>
		<td>:</td>
		<td>{!! $psuta1->ksmktm !!}</td>
	</tr>
	<tr>
		<td>ID transaksi SPP</td>
		<td>:</td>
		<td>{!! $psuta1->id_transaksispp !!}</td>
	</tr>
	<tr>
		<td>ID transaksi DPL</td>
		<td>:</td>
		<td>{!! $psuta1->id_transaksidpl !!}</td>
	</tr>
	<tr>
		<td>Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai dengan
semester terakhir / Daftar Kumpulan Nilai (DKN)</td>
		<td>:</td>
		<td>{!! $psuta1->dkn !!}</td>
	</tr>
	<tr>
		<td>Fotocopy form konsultasi TA1 yang telah ditanda tangani oleh ketua
jurusan</td>
		<td>:</td>
		<td>{!! $psuta1->konsul_ta1 !!}</td>
	</tr>
		<tr>
		<td>Mendapat rekomendasi dari pembimbing untuk mengikuti ujian
proposal tugas akhir</td>
		<td>:</td>
		<td>{!! $psuta1->rekomendasi !!}</td>
	</tr>
	<tr>
		<td>Form Kesediaan untuk membimbing dari calon Pembimbing TA</td>
		<td>:</td>
		<td>{!! $psuta1->kesediaan_membimbing !!}</td>
	</tr>
	<tr>
		<td>4 eksemplar tugas akhir yang telah disetujui oleh pembimbing
dijilid biasa dengan bagian depan plastik transparan dan bagian
belakang menggunaan kertas kambing warna biru.</td>
		<td>:</td>
		<td>{!! $psuta1->eksemplar !!}</td>
	</tr>
	<tr>
		<td>Fotocopy Surat Keputusan pembimbing Tugas Akhir</td>
		<td>:</td>
		<td>{!! $psuta1->sk_pemb !!}</td>
	</tr>
	<tr>
		<td>Semua berkas dimasukkan ke dalam map berwarna kuning</td>
		<td>:</td>
		<td>{!! $psuta1->map !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($psta->status_syaratuta1=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $psuta1->status_syaratuta1 !!}</span></td>
	</tr>
	
</table>
@endif

@if (count($psta)==0)
<a href="{!! url('pengajuansyaratuta1/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else

@if (@$psta->status_syaratta!="diverifikasi")
<a href="{!! url('pengajuansyaratuta1/input')!!}" class="btn btn-primary">{!! (count($pputa1)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

