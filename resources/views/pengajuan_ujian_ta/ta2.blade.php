	<style type="text/css">
		.form-control{
			width: 100px;
			float:right;
		}

		label{
			width: 800px;
		}
	</style>

	{!! Form::open(['url'=>'ujian_ta/input/ta2']) !!}
		<div class="form-group">
			{!! Form::label('ksmktm','Fotocopy Kartu Studi Mahasiswa (KSM) atau Kartu rencana
Studi (KRS) dan Kartu Tanda Mahasiswa (KTM) :') !!}
			{!! Form::select('ksmktm',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->ksmktm,['class'=>'form-control','id'=>'ksmktm']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('biaya_ujian','Membayar biaya ujian dan biaya bimbingan sebesar Rp.
450.000 / Rp. 255.000 bagi yang tidak lulus ujian komprehensif
yang pertama, ujian yang kedua atau ketiga ke Bank BNI
dengan no.rek 70570115 a.n Rektor Unsri :') !!}
			{!! Form::select('biaya_ujian',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->biaya_ujian,['class'=>'form-control','id'=>'biaya_ujian']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('dkn','Fotocopy Kartu Hasil Studi (KHS) dari semester 1 sampai
dengan semester terakhir / Daftar Kumpulan Nilai (DKN) :') !!}
			{!! Form::select('dkn',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->dkn,['class'=>'form-control','id'=>'dkn']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sertifikat','Melampirkan fotocopy sertifikat kursus Bahasa Inggris dari Unit
bahasa Inggris PIK :') !!}
			{!! Form::select('sertifikat',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->sertifikat,['class'=>'form-control','id'=>'sertifikat']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('suliet','Fotocopy/legalisir sertificate nilai SULIET minimal 400 :') !!}
			{!! Form::select('suliet',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->suliet,['class'=>'form-control','id'=>'suliet']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('printscreen_suliet','Printscren halaman nilai SULIET yang di Akademik (Simak):') !!}
			{!! Form::select('printscreen_suliet',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->printscreen_suliet,['class'=>'form-control','id'=>'printscreen_suliet']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('rekomendasi','Mendapat rekomendasi dari kedua pembimbing untuk ujian
komprehensif :') !!}
			{!! Form::select('rekomendasi',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->rekomendasi,['class'=>'form-control','id'=>'rekomendasi']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('form_ta1','Melampirkan Form Perbaikan Ujian Tugas Akhir Akhir I :') !!}
			{!! Form::select('form_ta1',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->form_ta1,['class'=>'form-control','id'=>'form_ta1']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('eksemplar','4 eksemplar tugas akhir yang telah disetujui oleh pembimbing
dijilid biasa dengan bagian depan plastik transparan dan bagian
belakang menggunaan kertas kambing warna biru. :') !!}
			{!! Form::select('eksemplar',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->eksemplar,['class'=>'form-control','id'=>'eksemplar']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('bebas_pustaka','Surat keterangan bebas pustaka dari perpustakaan Program
Diploma Komputer & perpustakaan Universitas Sriwijaya yang
masih berlaku :') !!}
			{!! Form::select('bebas_pustaka',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->bebas_pustaka,['class'=>'form-control','id'=>'bebas_pustaka']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('bebas_bayaran','Surat Keterangan dari bagian keuangan bahwa sudah bebas dari
pembayaran apapun, yang masih berlaku :') !!}
			{!! Form::select('bebas_bayaran',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->bebas_bayaran,['class'=>'form-control','id'=>'bebas_bayaran']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('sk_ta','Fotocopy Surat Keputusan Tugas Akhir II yang masih berlaku :') !!}
			{!! Form::select('sk_ta',["ada"=>"Ada","tidak ada"=>"Tidak Ada"],@$psuta2->sk_ta,['class'=>'form-control','id'=>'sk_ta']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Ajukan',['class'=>'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}
	<div class='clearfix'></div>