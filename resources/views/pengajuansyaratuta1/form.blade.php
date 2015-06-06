
		<div class="form-group">
			{!! Form::label('ksmktm','Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi
(KRS) dan Kartu Tanda Mahasiswa (KTM) :') !!}
			{!! Form::select('ksmktm',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta1->ksmktm,['class'=>'form-control','id'=>'ksmktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sppdpl','Fotocopy bukti pembayaran SPP dan DPL berjalan :') !!}
			{!! Form::select('sppdpl',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta1->sppdpl,['class'=>'form-control','id'=>'ktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('dkn','Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai dengan
semester terakhir / Daftar Kumpulan Nilai (DKN) :') !!}
			{!! Form::select('dkn',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta1->dkn,['class'=>'form-control','id'=>'dkn']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ktm','Fotokopi KTM yang berlaku :') !!}
			{!! Form::select('ktm',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->ktm,['class'=>'form-control','id'=>'ktm']) !!}
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
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	