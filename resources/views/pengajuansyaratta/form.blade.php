		<div class="form-group">
			{!! Form::label('no_hp','Judul TA (fix):') !!}
			{!! Form::text('judul',@$psta->judul,['class'=>'form-control','id'=>'no_hp'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('no_hp','Nomor HP :') !!}
			{!! Form::text('no_hp',@$psta->no_hp,['class'=>'form-control','id'=>'no_hp'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('jumlahsks','Jumlah SKS yang telah ditempuh :') !!}
			{!! Form::text('jumlah_sks',@$psta->jumlah_sks,['class'=>'form-control','id'=>'jumlahsks'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('idspp','ID transaksi SPP :') !!}
			{!! Form::text('id_transaksispp',@$psta->id_transaksispp,['class'=>'form-control','id'=>'idspp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('iddpl','ID transaksi DPL :') !!}
			{!! Form::text('id_transaksidpl',@$psta->id_transaksidpl,['class'=>'form-control','id'=>'iddpl']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ktm','Fotokopi KTM yang berlaku :') !!}
			{!! Form::select('ktm',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->ktm,['class'=>'form-control','id'=>'ktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('proposal_ta','Proposal Tugas Akhir :') !!}
			{!! Form::select('proposal_ta',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->proposal_ta,['class'=>'form-control','id'=>'proposal_ta']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tanda_kp','Tanda Terima Laporan Kerja Praktik :') !!}
			{!! Form::select('tanda_kp',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->tanda_kp,['class'=>'form-control','id'=>'tanda_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kesediaan_membimbing','Kesediaan untuk membimbing dari calon pembimbing TA :') !!}
			{!! Form::select('kesediaan_membimbing',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->kesediaan_membimbing,['class'=>'form-control','id'=>'kesediaan_membimbing']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('persetujuan_ta','Halaman Persetujuan Proyek TA :') !!}
			{!! Form::select('persetujuan_ta',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->persetujuan_ta,['class'=>'form-control','id'=>'persetujuan_ta']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sk_pemb','Peromohonan Penerbitan Surat Keputusan Pembimbing :') !!}
			{!! Form::select('sk_pemb',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->sk_pemb,['class'=>'form-control','id'=>'sk_pemb']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('permohonan_ambildata ','Permohonan Surat Pengantar pengambilan Data/Pelaksanaan Tugas Akhir :') !!}
			{!! Form::select('permohonan_ambildata',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->permohonan_ambildata,['class'=>'form-control','id'=>'permohonan_ambildata']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	