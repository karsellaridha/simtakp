@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Verifikasi Ujian TA 1</h3>
                </div><!-- /.box-header -->
  
   <div class="box-body">
<table class='table' id='datatable'>
<thead>
<tr>
<td>Nim</td>
<td>Nama</td>
<td>Status</td>
<td>aksi</td>
</tr>
</thead>
<tbody>
	@foreach($pengajuanUjian as $p)
<tr>
<td>{!! $p->nim !!}</td>
<td>{!! $p->mahasiswa->nama !!}</td>
<td>{!! $p->status !!}</td>
<td><a href='{!! url("verifikasi_ujian/ta1/input/".$p->nim) !!}'>Verifikasi</a></td>
</tr>
	@endforeach
</tbody>
</table>

   </div>

</div>


@stop