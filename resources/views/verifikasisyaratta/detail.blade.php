@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat SK TA</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
<center><table border="0" class="table">
	<tr>
		<td>NIM</td>
		<td>:</td> 
		<td>{!! $psta->mahasiswa->nim !!}<td>
	</tr>
		<td>Nama</td>
		<td>:</td> 
		<td>{!! $psta->mahasiswa->nama !!}<td>	
	<tr>
		<td>Dosen Pembimbing 1</td>
		<td>:</td>
		<td>{!! $psta->ppta->data_pembimbing_1->nama !!}<td>
	</tr>
	<tr>
		<td>Dosen Pembimbing 2</td>
		<td>:</td> 
		<td>{!! @$psta->ppta->data_pembimbing_2->nama !!}<td>
	</tr>
	<tr>
		<td>Judul Tugas Akhir</td>
		<td>:</td> 
		<td>{!! $psta->ppta->judul !!}<td>
	</tr>
	<tr>
		<td>Nomor HP</td>
		<td>:</td> 
		<td>{!! $psta->no_hp !!}<td>
	</tr>
</table></center>

@if(count($psta->verifikasi)==0)

{!! Form::open(['url'=>"verifikasisyaratta/$psta->id"]) !!}

<table border="0" class="table">
	<tr>
		<td>Jumlah SKS yang telah ditempuh</td>
		<td>:</td>
		<td>{!! $psta->jumlah_sks !!}</td>
		<td>{!! Form::checkbox('jumlah_sks') !!}<td>
	</tr>
	<tr>
		<td>ID transaksi SPP</td>
		<td>:</td>
		<td>{!! $psta->id_transaksispp !!}</td>
		<td>{!! Form::checkbox('id_transaksispp') !!}</td>
	</tr>
	<tr>
		<td>ID transaksi DPL</td>
		<td>:</td>
		<td>{!! $psta->id_transaksidpl !!}</td>
		<td>{!! Form::checkbox('id_transaksidpl') !!}</td>
	</tr>
	<tr>
		<td>Fotokopi KTM yang berlaku</td>
		<td>:</td>
		<td>{!! $psta->ktm !!}</td>
		<td>{!! Form::checkbox('ktm') !!}</td>
	</tr>
	<tr>
		<td>Proposal Tugas Akhir</td>
		<td>:</td>
		<td>{!! $psta->proposal_ta !!}</td>
		<td>{!! Form::checkbox('proposal_ta') !!}</td>
	</tr>
	<tr>
		<td>Tanda Terima Laporan Kerja Praktik</td>
		<td>:</td>
		<td>{!! $psta->tanda_kp !!}</td>
		<td>{!! Form::checkbox('tanda_kp') !!}</td>
	</tr>
	<tr>
		<td>Form Kesediaan untuk membimbing dari calon Pembimbing TA</td>
		<td>:</td>
		<td>{!! $psta->kesediaan_membimbing !!}</td>
		<td>{!! Form::checkbox('kesediaan_membimbing') !!}</td>
	</tr>
	<tr>
		<td>Halaman Persetujuan Proyek TA</td>
		<td>:</td>
		<td>{!! $psta->persetujuan_ta !!}</td>
		<td>{!! Form::checkbox('persetujuan_ta') !!}</td>
	</tr>
	<tr>
		<td>Peromohonan Penerbitan Surat Keputusan Pembimbing</td>
		<td>:</td>
		<td>{!! $psta->sk_pemb !!}</td>
		<td>{!! Form::checkbox('sk_pemb') !!}</td>
	</tr>
	<tr>
		<td>Permohonan Surat Pengantar pengambilan Data/Pelaksanaan Tugas Akhir</td>
		<td>:</td>
		<td>{!! $psta->permohonan_ambildata !!}</td>
		<td>{!! Form::checkbox('permohonan_ambildata') !!}</td>
	</tr>
</table>
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="form-group">
			<div class="col-md-2 pull-right">
				<a href="{!! url('verifikasisyaratta')!!}" class="btn btn-primary form-control">Kembali</a>
			</div>
@if(count($psta->verifikasi)==0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Verifikasi",['class'=>'btn btn-primary form-control','required']) !!}
			</div>
@endif
</div>

{!! Form::close() !!}

@stop