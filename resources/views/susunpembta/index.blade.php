@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <b><h2 class="box-title">Susun Pembimbing TA Tahun {!! date('Y') !!}</h2></b>
                </div><!-- /.box-header -->

                
                <div class="box-body">
@if(count($ppta)>0)
{!! Form::open(['url'=>'susunpembta/input']) !!}
	
<div class='clearfix'></div><br>
<a href="#" data-toggle="modal" data-target="#kuotaDosen" class='btn btn-primary pull-right'>Referensi Sisa Kuota Dosen</a>
<br><br>

<table class='table table-bordered'>
	<thead style='background:#c0c0c0'>
		<tr>
<td>NIM</td>
<td>Nama</td>
<td>Judul TA</td>
<td>Pembimbing 1</td>
<td>Pembimbing 2</td>
		</tr>
	</thead>
	<tbody>

@foreach($ppta as $pp)
<tr>
<td>{!! $pp->nim !!}</td>
<td>{!! $pp->mahasiswa->nama !!}</td>
<td>{!! $pp->judul !!}</td>
<td>
	{!! Form::input('hidden','id[]',$pp->id,['class'=>'form-control']) !!}
	{!! Form::select('pembimbing_1[]',$dosen,$pp->pembimbing_1,['class'=>'form-control pembimbing_1 pembimbing']) !!}</td>
<td>
<?php $dosen = array(null=>'Tidak Ada') + $dosen ?>
{!!  Form::select('pembimbing_2[]',$dosen,$pp->pembimbing_2,['class'=>'form-control pembimbing_2 pembimbing'])  !!}
<?php unset($dosen['null']) ?>
</td>
</tr>
@endforeach


	</tbody>
</table>

@else
"tidak ada pengajuan "
@endif
<!-- end if cek ppta-->


</div><!-- /.box-body -->
</div><!-- /.box -->
		<div class="form-group">

			@if (count($ppta)>0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Simpan",['class'=>'btn btn-danger form-control','id'=>'simpan']) !!}
			</div>
			@endif

			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembta/lihatdata')!!}" class="btn btn-success form-control">lihat data</a>
			</div>
		</div>

{!! Form::close() !!}

<!-- Modal -->
<div class="modal fade" id="kuotaDosen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
               
<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Kuota Dosen</h4>
                  </div>
                  <div class="modal-body">
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>NIP</th>
		<th>Nama Dosen</th>
		<th>Sisa Kuota</th>
	</tr>
	</thead>
	<tbody>

	@foreach($dosenAll as $data)
	<tr id='kolom_{!! $data->nip !!}' class=''>
		<td>{!! $data->nip !!}</td>
		<td>{!! $data->nama !!}</td>
		<td id='kuota_{!! $data->nip !!}' class='kuota'>{!! @$data->sisakuotata() !!}</td>
	</tr>
	@endforeach

	</tbody>
</table>
                  </div>
                  <div class="modal-footer">

                  </div>
   
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>

@stop

@section('js')
<script type="text/javascript">
var niplama;

function cekJikaTidakAdaMinus(){
	var oke = true
	$('.kuota').each(function(){
		if(parseInt($(this).html())<0){
			oke=false;
			
		}
	});
	return oke;
}


$('.pembimbing').focus(function(){
	niplama = this.value;
});

$('.pembimbing').change(function(){
	//cek dulu tidak boleh sama pemb1 dan pemb2 (belum)

	var kuotalama = parseInt($('#kuota_'+niplama).html());
	$('#kuota_'+niplama).html(kuotalama+1);

	var kuotabaru = parseInt($('#kuota_'+this.value).html());
	$('#kuota_'+this.value).html(kuotabaru-1);

	if((kuotalama+1)<0){
		$('#kolom_'+niplama).addClass('danger');
	}else{
		$('#kolom_'+niplama).removeClass('danger');

	}
	
	if((kuotabaru-1)<0){
		$('#kolom_'+this.value).addClass('danger');
	}else{
		$('#kolom_'+this.value).removeClass('danger');
	}

	if(cekJikaTidakAdaMinus()){
		$('#simpan').removeClass('disabled');
	}else{
		$('#simpan').addClass('disabled');
	}

	niplama = this.value;
});
</script>
@stop