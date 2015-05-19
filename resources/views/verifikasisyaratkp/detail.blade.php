@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengajuan Syarat KP</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
<center><table border="0" class="table">
	<tr>
		<td><h4>NIM</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $pskp->mahasiswa->nim !!}</h4><td>
	</tr>
		<td><h4>Nama</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $pskp->mahasiswa->nama !!}</h4><td>	
	<tr>
		<td><h4>Dosen Pembimbing</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $pskp->ppkp->dosen->nama !!}</h4><td>
	</tr>
	<tr>
		<td><h4>Tempat KP</h4></td>
		<td><h4>:</h4></td> 
		<td><h4>{!! $pskp->ppkp->tempat_kp !!}</h4><td>
	</tr>
</table></center>

@if(count($pskp->verifikasi) < 0)

{!! Form::open(['url'=>"verifikasisyaratkp/$pskp->id"]) !!}

<table border="0" class="table">
	<tr>
		<td>Jumlah SKS yang telah ditempuh</td>
		<td>:</td>
		<td>{!! $pskp->jumlah_sks !!}</td>
		<td>{!! Form::checkbox('jumlah_sks') !!}<td>
	</tr>
	<tr>
		<td>ID transaksi SPP</td>
		<td>:</td>
		<td>{!! $pskp->id_transaksispp !!}</td>
		<td>{!! Form::checkbox('id_transaksispp') !!}</td>
	</tr>
	<tr>
		<td>ID transaksi DPL</td>
		<td>:</td>
		<td>{!! $pskp->id_transaksidpl !!}</td>
		<td>{!! Form::checkbox('id_transaksidpl') !!}</td>
	</tr>
	<tr>
		<td>Lama Kerja Praktik</td>
		<td>:</td>
		<td>{!! $pskp->lama_kp !!}</td>
		<td>{!! Form::checkbox('lama_kp') !!}</td>
	</tr>
	<tr>
		<td>Proposal KP yang disetujui pembimbing</td>
		<td>:</td>
		<td>{!! $pskp->proposal_kp !!}</td>
		<td>{!! Form::checkbox('proposal_kp') !!}</td>
	</tr>
	<tr>
		<td>Mengisi Form Permohonan KP</td>
		<td>:</td>
		<td>{!! $pskp->permohonan_kp !!}</td>
		<td>{!! Form::checkbox('permohonan_kp') !!}</td>
	</tr>
	<tr>
		<td>Surat Kesediaan Dosen Untuk membimbing yang telah di tanda tangani</td>
		<td>:</td>
		<td>{!! $pskp->kesediaan_membimbing !!}</td>
		<td>{!! Form::checkbox('kesediaan_membimbing') !!}</td>
	</tr>
</table>
@endif

</div><!-- /.box-body -->
</div><!-- /.box -->

<div class="form-group">
			<div class="col-md-2 pull-right">
				<a href="{!! url('verifikasisyaratkp')!!}" class="btn btn-primary form-control">Kembali</a>
			</div>
@if(count($pskp->verifikasi) < 0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Verifikasi",['class'=>'btn btn-primary form-control','required']) !!}
			</div>
@endif
</div>

{!! Form::close() !!}

@stop