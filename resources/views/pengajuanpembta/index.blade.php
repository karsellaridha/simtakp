<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Pilih Dosen</h4>
                  </div>
                  <div class="modal-body">
<table cellpadding="5" cellspacing="0" border="1" class="table" id='datatable'>
	<thead>
	<tr bgcolor="#CCCCCC">
		<th>NIP</th>
		<th>Nama Dosen</th>
		<th>Kuota Bimbingan TA Tersedia</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>

	@foreach($dosen as $data)
	<tr>
		<td>{!! $data->nip !!}</td>
		<td>{!! $data->nama !!}</td>
		<td>{!! @$data->sisakuotata() !!}</td>
		<td><a href="" data-nip="{!! $data->nip !!}" data-sisakuota="{!! @$data->sisakuotata() !!}" data-nama="{!! $data->nama !!}" class="btn btn-primary pilih" id="pilih" >Pilih</a></td>
	</tr>
	@endforeach

	</tbody>
</table>
                  </div>
                  <div class="modal-footer">

                  </div>

                 <script type="text/javascript">
                 $(".pilih").click(function(e){
                 	e.preventDefault();
                 	if($(this).data('sisakuota')>0){
                 		$("#nip_{!! $pemb !!}").val($(this).data('nip'));
                 		$("#pembimbing_{!! $pemb !!}").val($(this).data('nama'));
                 		$('#myModal').modal('hide');
                 	}else{
                 		alert('maaf kuota dosen ini sudah penuh');
                 	}
                 	

                 });
                 </script>
