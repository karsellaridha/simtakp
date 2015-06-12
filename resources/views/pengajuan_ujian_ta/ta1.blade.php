	<style type="text/css">
		.form-control{
			width: 100px;
			float:right;
		}

		label{
			width: 800px;
		}
	</style>

	{!! Form::open(['url'=>'ujian_ta/input/ta1']) !!}
		<div class="form-group">
			{!! Form::label('ksmktm','Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana Studi
(KRS) dan Kartu Tanda Mahasiswa (KTM) :') !!}
			{!! Form::select('ksm',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta1->ksm,['class'=>'form-control','id'=>'ksmktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sppdpl','Fotocopy bukti pembayaran SPP dan DPL berjalan :') !!}
			{!! Form::select('spp',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta1->spp,['class'=>'form-control','id'=>'ktm']) !!}
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
			{!! Form::label('ktm','Fotocopy form konsultasi TA1 yang telah ditanda tangani oleh ketua jurusan :') !!}
			{!! Form::select('form_konsultasi',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->form_konsultasi,['class'=>'form-control','id'=>'ktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('proposal_ta','Mendapat rekomendasi dari pembimbing untuk mengikuti ujian proposal tugas akhir :') !!}
			{!! Form::select('rekomendasi_sidang',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->rekomendasi_sidang,['class'=>'form-control','id'=>'proposal_ta']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tanda_kp','4 eksemplar tugas akhir yang telah disetujui oleh pembimbing dijilid biasa dengan bagian depan plastik transparan dan bagian belakang menggunaan kertas kambing warna biru :') !!}
			{!! Form::select('tugas_akhir_1',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->tugas_akhir_1,['class'=>'form-control','id'=>'tanda_kp']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kesediaan_membimbing','Fotocopy Surat Keputusan pembimbing Tugas Akhir :') !!}
			{!! Form::select('sk_pembimbing_ta',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psta->sk_pembimbing_ta,['class'=>'form-control','id'=>'kesediaan_membimbing']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Ajukan',['class'=>'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}
	<div class='clearfix'></div>