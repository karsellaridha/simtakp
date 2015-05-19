@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat KP</h3>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if (count($pskp)>0)
<table border="0" class="table">
	<tr>
		<td>Jumlah SKS yang telah ditempuh</td>
		<td>:</td>
		<td>{!! $pskp->jumlah_sks !!}</td>
	</tr>
	<tr>
		<td>ID transaksi SPP</td>
		<td>:</td>
		<td>{!! $pskp->id_transaksispp !!}</td>
	</tr>
	<tr>
		<td>ID transaksi DPL</td>
		<td>:</td>
		<td>{!! $pskp->id_transaksidpl !!}</td>
	</tr>
	<tr>
		<td>Lama Kerja Praktik</td>
		<td>:</td>
		<td>{!! $pskp->lama_kp !!}</td>
	</tr>
		<tr>
		<td>Tempat Kerja Praktik</td>
		<td>:</td>
		<td>{!! $ppkp->tempat_kp !!}</td>
	</tr>
	<tr>
		<td>Proposal KP yang disetujui pembimbing</td>
		<td>:</td>
		<td>{!! $pskp->proposal_kp !!}</td>
	</tr>
	<tr>
		<td>Mengisi Form Permohonan KP</td>
		<td>:</td>
		<td>{!! $pskp->permohonan_kp !!}</td>
	</tr>
	<tr>
		<td>Surat Kesediaan Dosen Untuk membimbing yang telah di tanda tangani</td>
		<td>:</td>
		<td>{!! $pskp->kesediaan_membimbing !!}</td>
	</tr>
	<tr>
		<td>Dosen Pembimbing</td>
		<td>:</td>
		<td>{!! $ppkp->dosen->nama !!}</td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><span class="label {!! ($pskp->status_syaratkp=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $pskp->status_syaratkp !!}</span></td>
	</tr>
	
</table>
@endif

@if (count($pskp)==0)
<a href="{!! url('pengajuansyaratkp/input')!!}" class="btn btn-primary">{!!"Ajukan"!!}</a>
@else

@if (@$pskp->status_syaratkp=="diajukan")
<a href="{!! url('pengajuansyaratkp/input')!!}" class="btn btn-primary">{!! (count($ppkp)>0) ? "Edit" : "Ajukan" !!}</a>
@endif
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->



@stop

