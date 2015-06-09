@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat Permintaan SK TA</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($psta)>0)
<table border="0" class="table">
	<tr>
		<td>No.HP</td>
		<td>:</td>
		<td>{!! $psta->no_hp !!}</td>
	</tr>
	<tr>
		<td>Jumlah SKS yang telah ditempuh</td>
		<td>:</td>
		<td>{!! $psta->jumlah_sks !!}</td>
	</tr>
	<tr>
		<td>ID transaksi SPP</td>
		<td>:</td>
		<td>{!! $psta->id_transaksispp !!}</td>
	</tr>
	<tr>
		<td>ID transaksi DPL</td>
		<td>:</td>
		<td>{!! $psta->id_transaksidpl !!}</td>
	</tr>
	<tr>
		<td>Fotokopi KTM yang berlaku</td>
		<td>:</td>
		<td>{!! $psta->ktm !!}</td>
	</tr>
	<tr>
		<td>Proposal Tugas Akhir</td>
		<td>:</td>
		<td>{!! $psta->proposal_ta !!}</td>
	</tr>
		<tr>
		<td>Tanda Terima Laporan Kerja Praktik</td>
		<td>:</td>
		<td>{!! $psta->tanda_kp !!}</td>
	</tr>
	<tr>
		<td>Form Kesediaan untuk membimbing dari calon Pembimbing TA</td>
		<td>:</td>
		<td>{!! $psta->kesediaan_membimbing !!}</td>
	</tr>
	<tr>
		<td>Halaman Persetujuan Proyek TA</td>
		<td>:</td>
		<td>{!! $psta->persetujuan_ta !!}</td>
	</tr>
	<tr>
		<td>Peromohonan Penerbitan Surat Keputusan Pembimbing</td>
		<td>:</td>
		<td>{!! $psta->sk_pemb !!}</td>
	</tr>
	<tr>
		<td>Permohonan Surat Pengantar pengambilan Data/Pelaksanaan Tugas Akhir</td>
		<td>:</td>
		<td>{!! $psta->permohonan_ambildata !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($psta->status_syaratkp=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $psta->status_syaratta !!}</span></td>
	</tr>
	
</table>
@endif

@if (count($psta)==0)
<a href="{!! url('pengajuansyaratta/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else

@if (@$psta->status_syaratta=="diajukan")
<a href="{!! url('pengajuansyaratta/input')!!}" class="btn btn-primary">{!! (count($ppta)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

