@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Verifikasi Ujian TA 1</h3>
                </div><!-- /.box-header -->
  
   <div class="box-body">
   <div class='clearfix'></div><br>
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
<thead>
<tr bgcolor="#CCCCCC">
	<td>Nim</td>
	<td>Nama</td>
	<td>Status</td>
	<td>Aksi</td>
</tr>
</thead>

<tbody>
	@foreach($pengajuanUjian as $p)
<tr>
	<td>{!! $p->nim !!}</td>
	<td>{!! $p->mahasiswa->nama !!}</td>
	<td><span class="label {!! ($p->status=="diverifikasi")? "label-danger" : "label-success" !!}">{!! $p->status !!}</span></td>
	<td><a href='{!! url("verifikasi_ujian/ta1/input/".$p->nim) !!}'>Verifikasi</a></td>
</tr>
	@endforeach
</tbody>
</table>

   </div>

</div>


@stop