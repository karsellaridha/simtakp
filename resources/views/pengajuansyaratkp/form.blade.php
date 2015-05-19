

		<div class="form-group">
			{!! Form::label('jumlahsks','Jumlah SKS yang telah ditempuh :') !!}
			{!! Form::text('jumlah_sks',@$pskp->jumlah_sks,['class'=>'form-control','id'=>'jumlahsks'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('idspp','ID transaksi SPP :') !!}
			{!! Form::text('id_transaksispp',@$pskp->id_transaksispp,['class'=>'form-control','id'=>'idspp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('iddpl','ID transaksi DPL :') !!}
			{!! Form::text('id_transaksidpl',@$pskp->id_transaksidpl,['class'=>'form-control','id'=>'iddpl']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('lamakp','Lama Kerja Praktik :') !!}
			{!! Form::text('lama_kp',@$pskp->lama_kp,['class'=>'form-control','id'=>'lamakp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('proposal_kp','Proposal KP yang disetujui pembimbing :') !!}
			{!! Form::select('proposal_kp',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$pskp->proposal_kp,['class'=>'form-control','id'=>'proposal_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('permohonan_kp','Mengisi Form Permohonan KP :') !!}
			{!! Form::select('permohonan_kp',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$pskp->permohonan_kp,['class'=>'form-control','id'=>'permohonan_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kesediaan_membimbing','Surat Kesediaan Dosen Untuk membimbing yang telah di tanda tangani :') !!}
			{!! Form::select('kesediaan_membimbing',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$pskp->kesediaan_membimbing,['class'=>'form-control','id'=>'kesediaan_membimbing']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	