@extends("template")
@section("content")

<div class="box">
                <div class="box-header">
                  <b><h2 class="box-title">Susun Pembimbing 1 TA {!! date('Y') !!}</h2></b>
                </div><!-- /.box-header -->

                
                <div class="box-body">

{!! Form::open(['url'=>'susunpembta/input']) !!}
	
<div class='clearfix'></div><br>


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
<td>{!! Form::select('pembimbing_1',$dosen,$pp->pembimbing_1,['class'=>'form-control']) !!}</td>
<td>{!! $pp->pembimbing_2 !!}</td>
</tr>
@endforeach


	</tbody>
</table>




</div><!-- /.box-body -->
</div><!-- /.box -->
		<div class="form-group">

			@if (count($ppta)>0)
			<div class="col-md-2 pull-right">
				{!! Form::submit("Tukar",['class'=>'btn btn-primary form-control']) !!}
			</div>
			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembta/simpan')!!}" class="btn btn-danger form-control">Simpan</a>
			</div>
			@endif

			<div class="col-md-2 pull-right">
				<a href="{!! url('susunpembta/lihatdata')!!}" class="btn btn-success form-control">lihat data</a>
			</div>
		</div>

{!! Form::close() !!}

<div class='kuotalist'></div>

@stop

@section('js')
<script type="text/javascript">
var kuota = <?php echo json_encode($list_dosen); ?>;

function getKuota(idx){
	return kuota[idx];
}

function makeKuotaList(){
	var data = '';
	$.each(kuota as idx){
		data+="";
	}
	$("#kuotalist").html(data);
}
makeKuotaList();
</script>
@stop