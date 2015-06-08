@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah Pengajuan Ujian TA</h3>
                </div><!-- /.box-header -->
  
   <div class="box-body">

   	@if($pengajuanUjian === 0)

   		@include('pengajuan_ujian_ta.ta1')

   	@endif

   </div>

</div>
@stop